<?php declare(strict_types=1);
namespace Phan\AST;

use ast\Node;
use ast;
use function implode;

/**
 * This converts a PHP AST into an approximate string representation.
 * This ignores line numbers and spacing.
 *
 * Eventual goals:
 *
 * 1. Short representations of constants for LSP hover requests.
 * 2. Short representations for errors (e.g. "Error at $x->foo(self::MY_CONST)")
 * 3. Configuration of rendering this.
 *
 * Similar utilities:
 *
 * - https://github.com/tpunt/php-ast-reverter is a pretty printer.
 * - \Phan\Debug::nodeToString() converts nodes to strings.
 */
class ASTReverter
{
    /** @var array<int,Closure(Node):string> */
    private static $closure_map;
    /** @var Closure(Node):string */
    private static $noop;

    // TODO: Make this configurable, copy instance properties to static properties.
    public function __construct()
    {
    }

    public static function toShortString($node)
    {
        if (!($node instanceof Node)) {
            // TODO: One-line representations for strings, minimal representations for floats, etc.
            return \var_export($node, true);
        }
        return (self::$closure_map[$node->kind] ?? self::$noop)($node);
    }

    public static function init()
    {
        self::$noop = function (Node $_) {
            return '(unknown)';
        };
        self::$closure_map = [
            ast\AST_CLASS_CONST => function (Node $node) : string {
                return self::toShortString($node->children['class']) . '::' . $node->children['const'];
            },
            ast\AST_CONST => function (Node $node) : string {
                return self::toShortString($node->children['name']);
            },
            ast\AST_NAME => function (Node $node) : string {
                $result = $node->children['name'];
                switch ($node->flags) {
                    case ast\flags\NAME_FQ:
                        return '\\' . $result;
                    case ast\flags\NAME_RELATIVE;
                        return 'namespace\\' . $result;
                    default:
                        return (string)$result;
                }
            },
            ast\AST_ARRAY => function (Node $node) : string {
                $parts = [];
                foreach ($node->children as $elem) {
                    if (!$elem) {
                        $parts[] = '';
                        continue;
                    }
                    $part = self::toShortString($elem->children['value']);
                    $key_node = $elem->children['key'];
                    if ($key_node !== null) {
                        $part = self::toShortString($key_node) . '=>' . $part;
                    }
                    $parts[] = $part;
                }
                $string = implode(',', $parts);
                switch ($node->flags) {
                    case ast\flags\ARRAY_SYNTAX_SHORT:
                    case ast\flags\ARRAY_SYNTAX_LONG:
                    default:
                        return "[$string]";
                    case ast\flags\ARRAY_SYNTAX_LIST:
                        return "list($string)";
                }
            },
        ];
    }
}
ASTReverter::init();

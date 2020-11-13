<?php // phpcs:ignoreFile

/**
 * This contains the information needed to convert the function signatures for php 8.0 to php 7.4 (and vice versa)
 *
 * This has two sections.
 * The 'new' section contains function/method names from FunctionSignatureMap (And alternates, if applicable) that do not exist in php7.3 or have different signatures in php 7.4.
 *   If they were just updated, the function/method will be present in the 'added' signatures.
 * The 'old' signatures contains the signatures that are different in php 7.3.
 *   Functions are expected to be removed only in major releases of php.
 *
 * TODO: Add remaining functions
 *
 * @see FunctionSignatureMap.php
 *
 * @phan-file-suppress PhanPluginMixedKeyNoKey (read by Phan when analyzing this file)
 */
return [
'new' => [
'array_combine' => ['associative-array', 'keys'=>'string[]|int[]', 'values'=>'array'],
'bcdiv' => ['string', 'dividend'=>'string', 'divisor'=>'string', 'scale='=>'int'],
'bcmod' => ['string', 'dividend'=>'string', 'divisor'=>'string', 'scale='=>'int'],
'bcpowmod' => ['string', 'base'=>'string', 'exponent'=>'string', 'modulus'=>'string', 'scale='=>'int'],
'com_load_typelib' => ['bool', 'typelib_name'=>'string', 'case_insensitive='=>'true'],
'count_chars' => ['array<int,int>|string', 'input'=>'string', 'mode='=>'int'],
'date_add' => ['DateTime', 'object'=>'DateTime', 'interval'=>'DateInterval'],
'date_date_set' => ['DateTime', 'object'=>'DateTime', 'year'=>'int', 'month'=>'int', 'day'=>'int'],
'date_diff' => ['DateInterval', 'obj1'=>'DateTimeInterface', 'obj2'=>'DateTimeInterface', 'absolute='=>'bool'],
'date_format' => ['string', 'object'=>'DateTimeInterface', 'format'=>'string'],
'date_isodate_set' => ['DateTime', 'object'=>'DateTime', 'year'=>'int', 'week'=>'int', 'day='=>'int|mixed'],
'date_parse' => ['array<string,mixed>', 'date'=>'string'],
'date_sub' => ['DateTime', 'object'=>'DateTime', 'interval'=>'DateInterval'],
'date_sun_info' => ['array<string,bool|int>', 'time'=>'int', 'latitude'=>'float', 'longitude'=>'float'],
'date_time_set' => ['DateTime', 'object'=>'DateTime', 'hour'=>'int', 'minute'=>'int', 'second='=>'int', 'microseconds='=>'int'],
'date_timestamp_set' => ['DateTime', 'object'=>'DateTime', 'unixtimestamp'=>'int'],
'date_timezone_set' => ['DateTime', 'object'=>'DateTime', 'timezone'=>'DateTimeZone'],
'fdiv' => ['float', 'dividend'=>'float', 'divisor'=>'float'],
'get_debug_type' => ['string', 'var'=>'mixed'],
'get_resource_id' => ['int', 'res'=>'resource'],
'gmdate' => ['string', 'format'=>'string', 'timestamp='=>'int'],
'gmmktime' => ['int|false', 'hour'=>'int', 'minute='=>'int', 'second='=>'int', 'month='=>'int', 'day='=>'int', 'year='=>'int'],
'hash_hkdf' => ['string', 'algo'=>'string', 'ikm'=>'string', 'length='=>'int', 'info='=>'string', 'salt='=>'string'],
'imageaffine' => ['false|object', 'src'=>'object', 'affine'=>'array', 'clip='=>'array'],
'imagecreate' => ['false|object', 'x_size'=>'int', 'y_size'=>'int'],
'imagecreatefrombmp' => ['false|object', 'filename'=>'string'],
'imagecreatefromgd' => ['false|object', 'filename'=>'string'],
'imagecreatefromgd2' => ['false|object', 'filename'=>'string'],
'imagecreatefromgd2part' => ['false|object', 'filename'=>'string', 'srcx'=>'int', 'srcy'=>'int', 'width'=>'int', 'height'=>'int'],
'imagecreatefromgif' => ['false|object', 'filename'=>'string'],
'imagecreatefromjpeg' => ['false|object', 'filename'=>'string'],
'imagecreatefrompng' => ['false|object', 'filename'=>'string'],
'imagecreatefromstring' => ['false|object', 'image'=>'string'],
'imagecreatefromwbmp' => ['false|object', 'filename'=>'string'],
'imagecreatefromwebp' => ['false|object', 'filename'=>'string'],
'imagecreatefromxbm' => ['false|object', 'filename'=>'string'],
'imagecreatefromxpm' => ['false|object', 'filename'=>'string'],
'imagecreatetruecolor' => ['false|object', 'x_size'=>'int', 'y_size'=>'int'],
'imagecrop' => ['false|object', 'im'=>'object', 'rect'=>'array'],
'imagecropauto' => ['false|object', 'im'=>'object', 'mode'=>'int', 'threshold'=>'float', 'color'=>'int'],
'imagegetclip' => ['array<int,int>', 'im'=>'object'],
'imagegrabscreen' => ['false|object'],
'imagegrabwindow' => ['false|object', 'window_handle'=>'int', 'client_area='=>'int'],
'imagerotate' => ['false|object', 'src_im'=>'object', 'angle'=>'float', 'bgdcolor'=>'int', 'ignoretransparent='=>'int'],
'imagescale' => ['false|object', 'im'=>'object', 'new_width'=>'int', 'new_height='=>'int', 'method='=>'int'],
'imagejpeg' => ['bool', 'im'=>'object', 'filename='=>'?string', 'quality='=>'int'],
'imagepng' => ['bool', 'im'=>'object', 'filename='=>'?string', 'quality='=>'int', 'filters='=>'int'],
'imagegif' => ['bool', 'im'=>'object', 'filename='=>'?string'],
'imagewbmp' => ['bool', 'im'=>'object', 'filename='=>'?string', 'foreground='=>'int'],
'imagecopyresampled' => ['bool', 'dst_im'=>'object', 'src_im'=>'object', 'dst_x'=>'int', 'dst_y'=>'int', 'src_x'=>'int', 'src_y'=>'int', 'dst_w'=>'int', 'dst_h'=>'int', 'src_w'=>'int', 'src_h'=>'int'],
'imagedestroy' => ['bool', 'im'=>'object'],
'imagecopy' => ['bool', 'dst_im'=>'object', 'src_im'=>'object', 'dst_x'=>'int', 'dst_y'=>'int', 'src_x'=>'int', 'src_y'=>'int', 'src_w'=>'int', 'src_h'=>'int'],
'imagecopymerge' => ['bool', 'src_im'=>'object', 'dst_im'=>'object', 'dst_x'=>'int', 'dst_y'=>'int', 'src_x'=>'int', 'src_y'=>'int', 'src_w'=>'int', 'src_h'=>'int', 'pct'=>'int'],
'imagecopymergegray' => ['bool', 'src_im'=>'object', 'dst_im'=>'object', 'dst_x'=>'int', 'dst_y'=>'int', 'src_x'=>'int', 'src_y'=>'int', 'src_w'=>'int', 'src_h'=>'int', 'pct'=>'int'],
'imagecopyresampled' => ['bool', 'dst_im'=>'object', 'src_im'=>'object', 'dst_x'=>'int', 'dst_y'=>'int', 'src_x'=>'int', 'src_y'=>'int', 'dst_w'=>'int', 'dst_h'=>'int', 'src_w'=>'int', 'src_h'=>'int'],
'imagecopyresized' => ['bool', 'dst_im'=>'object', 'src_im'=>'object', 'dst_x'=>'int', 'dst_y'=>'int', 'src_x'=>'int', 'src_y'=>'int', 'dst_w'=>'int', 'dst_h'=>'int', 'src_w'=>'int', 'src_h'=>'int'],
'imagesx' => ['int|false', 'im'=>'object'],
'imagesy' => ['int|false', 'im'=>'object'],
'imagesavealpha' => ['bool', 'im'=>'object', 'on'=>'bool'],
'imagefill' => ['bool', 'im'=>'object', 'x'=>'int', 'y'=>'int', 'col'=>'int'],
'imagefilledarc' => ['bool', 'im'=>'object', 'cx'=>'int', 'cy'=>'int', 'w'=>'int', 'h'=>'int', 's'=>'int', 'e'=>'int', 'col'=>'int', 'style'=>'int'],
'imagefilledellipse' => ['bool', 'im'=>'object', 'cx'=>'int', 'cy'=>'int', 'w'=>'int', 'h'=>'int', 'color'=>'int'],
'imagefilledpolygon' => ['bool', 'im'=>'object', 'point'=>'array', 'num_points'=>'int', 'col'=>'int'],
'imagefilledrectangle' => ['bool', 'im'=>'object', 'x1'=>'int', 'y1'=>'int', 'x2'=>'int', 'y2'=>'int', 'col'=>'int'],
'imagefilltoborder' => ['bool', 'im'=>'object', 'x'=>'int', 'y'=>'int', 'border'=>'int', 'col'=>'int'],
'mb_decode_numericentity' => ['string|false', 'string'=>'string', 'convmap'=>'array', 'encoding='=>'string'],
'mktime' => ['int|false', 'hour'=>'int', 'minute='=>'int', 'second='=>'int', 'month='=>'int', 'day='=>'int', 'year='=>'int'],
'parse_str' => ['void', 'encoded_string'=>'string', '&w_result'=>'array'],
'password_hash' => ['string', 'password'=>'string', 'algo'=>'?string|?int', 'options='=>'array'],
'PhpToken::tokenize' => ['list<PhpToken>', 'code'=>'string', 'flags='=>'int'],
'PhpToken::is' => ['bool', 'kind'=>'string|int|string[]|int[]'],
'PhpToken::isIgnorable' => ['bool'],
'PhpToken::getTokenName' => ['string'],
'proc_get_status' => ['array<string,int|string|bool>', 'process'=>'resource'],
'sodium_crypto_aead_chacha20poly1305_ietf_decrypt' => ['string|false', 'confidential_message'=>'string', 'public_message'=>'string', 'nonce'=>'string', 'key'=>'string'],
'str_contains' => ['bool', 'haystack'=>'string', 'needle'=>'string'],
'str_ends_with' => ['bool', 'haystack'=>'string', 'needle'=>'string'],
'str_starts_with' => ['bool', 'haystack'=>'string', 'needle'=>'string'],
'strchr' => ['string|false', 'haystack'=>'string', 'needle'=>'string', 'before_needle='=>'bool'],
'stripos' => ['int|false', 'haystack'=>'string', 'needle'=>'string', 'offset='=>'int'],
'stristr' => ['string|false', 'haystack'=>'string', 'needle'=>'string', 'before_needle='=>'bool'],
'strpos' => ['int|false', 'haystack'=>'string', 'needle'=>'string', 'offset='=>'int'],
'strrchr' => ['string|false', 'haystack'=>'string', 'needle'=>'string'],
'strripos' => ['int|false', 'haystack'=>'string', 'needle'=>'string', 'offset='=>'int'],
'strrpos' => ['int|false', 'haystack'=>'string', 'needle'=>'string', 'offset='=>'int'],
'strstr' => ['string|false', 'haystack'=>'string', 'needle'=>'string', 'before_needle='=>'bool'],
'version_compare' => ['int|bool', 'version1'=>'string', 'version2'=>'string', 'operator='=>'?(\'\x3c\'|\'lt\'|\'\x3c=\'|\'le\'|\'\x3e\'|\'gt\'|\'\x3e=\'|\'ge\'|\'==\'|\'=\'|\'eq\'|\'!=\'|\'\x3c\x3e\'|\'ne\')'],
'xml_parser_create' => ['XMLParser', 'encoding='=>'string'],
'xml_parser_create_ns' => ['XMLParser', 'encoding='=>'string', 'sep='=>'string'],
'xml_parser_free' => ['bool', 'parser'=>'XMLParser'],
'xml_parser_get_option' => ['mixed|false', 'parser'=>'XMLParser', 'option'=>'int'],
'xml_parser_set_option' => ['bool', 'parser'=>'XMLParser', 'option'=>'int', 'value'=>'mixed'],
'xmlwriter_end_attribute' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_end_cdata' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_end_comment' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_end_document' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_end_dtd' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_end_dtd_attlist' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_end_dtd_element' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_end_dtd_entity' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_end_element' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_end_pi' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_flush' => ['mixed', 'xmlwriter'=>'XMLWriter', 'empty='=>'bool'],
'xmlwriter_full_end_element' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_open_memory' => ['XMLWriter'],
'xmlwriter_open_uri' => ['XMLWriter', 'source'=>'string'],
'xmlwriter_output_memory' => ['string', 'xmlwriter'=>'XMLWriter', 'flush='=>'bool'],
'xmlwriter_set_indent' => ['bool', 'xmlwriter'=>'XMLWriter', 'indent'=>'bool'],
'xmlwriter_set_indent_string' => ['bool', 'xmlwriter'=>'XMLWriter', 'indentstring'=>'string'],
'xmlwriter_start_attribute' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string'],
'xmlwriter_start_attribute_ns' => ['bool', 'xmlwriter'=>'XMLWriter', 'prefix'=>'string', 'name'=>'string', 'uri'=>'string'],
'xmlwriter_start_cdata' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_start_comment' => ['bool', 'xmlwriter'=>'XMLWriter'],
'xmlwriter_start_document' => ['bool', 'xmlwriter'=>'XMLWriter', 'version='=>'string', 'encoding='=>'string', 'standalone='=>'string'],
'xmlwriter_start_dtd' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string', 'publicid='=>'string', 'sysid='=>'string'],
'xmlwriter_start_dtd_attlist' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string'],
'xmlwriter_start_dtd_element' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string'],
'xmlwriter_start_dtd_entity' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string', 'isparam'=>'bool'],
'xmlwriter_start_element' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string'],
'xmlwriter_start_element_ns' => ['bool', 'xmlwriter'=>'XMLWriter', 'prefix'=>'string', 'name'=>'string', 'uri'=>'string'],
'xmlwriter_start_pi' => ['bool', 'xmlwriter'=>'XMLWriter', 'target'=>'string'],
'xmlwriter_text' => ['bool', 'xmlwriter'=>'XMLWriter', 'content'=>'string'],
'xmlwriter_write_attribute' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string', 'content'=>'string'],
'xmlwriter_write_attribute_ns' => ['bool', 'xmlwriter'=>'XMLWriter', 'prefix'=>'string', 'name'=>'string', 'uri'=>'string', 'content'=>'string'],
'xmlwriter_write_cdata' => ['bool', 'xmlwriter'=>'XMLWriter', 'content'=>'string'],
'xmlwriter_write_comment' => ['bool', 'xmlwriter'=>'XMLWriter', 'content'=>'string'],
'xmlwriter_write_dtd' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string', 'publicid='=>'string', 'sysid='=>'string', 'subset='=>'string'],
'xmlwriter_write_dtd_attlist' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string', 'content'=>'string'],
'xmlwriter_write_dtd_element' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string', 'content'=>'string'],
'xmlwriter_write_dtd_entity' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string', 'content'=>'string', 'pe'=>'bool', 'publicid'=>'string', 'sysid'=>'string', 'ndataid'=>'string'],
'xmlwriter_write_element' => ['bool', 'xmlwriter'=>'XMLWriter', 'name'=>'string', 'content'=>'string'],
'xmlwriter_write_element_ns' => ['bool', 'xmlwriter'=>'XMLWriter', 'prefix'=>'string', 'name'=>'string', 'uri'=>'string', 'content'=>'string'],
'xmlwriter_write_pi' => ['bool', 'xmlwriter'=>'XMLWriter', 'target'=>'string', 'content'=>'string'],
'xmlwriter_write_raw' => ['bool', 'xmlwriter'=>'XMLWriter', 'content'=>'string'],
],
'old' => [

'array_combine' => ['associative-array|false', 'keys'=>'string[]|int[]', 'values'=>'array'],
'bcdiv' => ['?string', 'dividend'=>'string', 'divisor'=>'string', 'scale='=>'int'],
'bcmod' => ['?string', 'dividend'=>'string', 'divisor'=>'string', 'scale='=>'int'],
'bcpowmod' => ['?string', 'base'=>'string', 'exponent'=>'string', 'modulus'=>'string', 'scale='=>'int'],
'com_load_typelib' => ['bool', 'typelib_name'=>'string', 'case_insensitive='=>'bool'],
'count_chars' => ['array<int,int>|false|string', 'input'=>'string', 'mode='=>'int'],
'create_function' => ['string', 'args'=>'string', 'code'=>'string'],
'date_add' => ['DateTime|false', 'object'=>'DateTime', 'interval'=>'DateInterval'],
'date_date_set' => ['DateTime|false', 'object'=>'DateTime', 'year'=>'int', 'month'=>'int', 'day'=>'int'],
'date_diff' => ['DateInterval|false', 'obj1'=>'DateTimeInterface', 'obj2'=>'DateTimeInterface', 'absolute='=>'bool'],
'date_format' => ['string|false', 'object'=>'DateTimeInterface', 'format'=>'string'],
'date_isodate_set' => ['DateTime|false', 'object'=>'DateTime', 'year'=>'int', 'week'=>'int', 'day='=>'int|mixed'],
'date_parse' => ['array<string,mixed>|false', 'date'=>'string'],
'date_sub' => ['DateTime|false', 'object'=>'DateTime', 'interval'=>'DateInterval'],
'date_sun_info' => ['array<string,bool|int>|false', 'time'=>'int', 'latitude'=>'float', 'longitude'=>'float'],
'date_time_set' => ['DateTime|false', 'object'=>'DateTime', 'hour'=>'int', 'minute'=>'int', 'second='=>'int', 'microseconds='=>'int'],
'date_timestamp_set' => ['DateTime|false', 'object'=>'DateTime', 'unixtimestamp'=>'int'],
'date_timezone_set' => ['DateTime|false', 'object'=>'DateTime', 'timezone'=>'DateTimeZone'],
'each' => ['array{0:int|string,key:int|string,1:mixed,value:mixed}', '&r_arr'=>'array'],
'gmdate' => ['string|false', 'format'=>'string', 'timestamp='=>'int'],
'gmmktime' => ['int|false', 'hour='=>'int', 'minute='=>'int', 'second='=>'int', 'month='=>'int', 'day='=>'int', 'year='=>'int'],
'gmp_random' => ['GMP', 'limiter='=>'int'],
'gzgetss' => ['string|false', 'zp'=>'resource', 'length'=>'int', 'allowable_tags='=>'string'],
'hash_hkdf' => ['string|false', 'algo'=>'string', 'ikm'=>'string', 'length='=>'int', 'info='=>'string', 'salt='=>'string'],
'image2wbmp' => ['bool', 'im'=>'resource', 'filename='=>'?string', 'threshold='=>'int'],
'imageaffine' => ['resource|false', 'src'=>'resource', 'affine'=>'array', 'clip='=>'array'],
'imagecreate' => ['resource|false', 'x_size'=>'int', 'y_size'=>'int'],
'imagecreatefrombmp' => ['resource|false', 'filename'=>'string'],
'imagecreatefromgd' => ['resource|false', 'filename'=>'string'],
'imagecreatefromgd2' => ['resource|false', 'filename'=>'string'],
'imagecreatefromgd2part' => ['resource|false', 'filename'=>'string', 'srcx'=>'int', 'srcy'=>'int', 'width'=>'int', 'height'=>'int'],
'imagecreatefromgif' => ['resource|false', 'filename'=>'string'],
'imagecreatefromjpeg' => ['resource|false', 'filename'=>'string'],
'imagecreatefrompng' => ['resource|false', 'filename'=>'string'],
'imagecreatefromstring' => ['resource|false', 'image'=>'string'],
'imagecreatefromwbmp' => ['resource|false', 'filename'=>'string'],
'imagecreatefromwebp' => ['resource|false', 'filename'=>'string'],
'imagecreatefromxbm' => ['resource|false', 'filename'=>'string'],
'imagecreatefromxpm' => ['resource|false', 'filename'=>'string'],
'imagecreatetruecolor' => ['resource|false', 'x_size'=>'int', 'y_size'=>'int'],
'imagecrop' => ['resource|false', 'im'=>'resource', 'rect'=>'array'],
'imagecropauto' => ['resource|false', 'im'=>'resource', 'mode'=>'int', 'threshold'=>'float', 'color'=>'int'],
'imagegetclip' => ['array<int,int>|false', 'im'=>'resource'],
'imagegrabscreen' => ['false|resource'],
'imagegrabwindow' => ['false|resource', 'window_handle'=>'int', 'client_area='=>'int'],
'imagerotate' => ['resource|false', 'src_im'=>'resource', 'angle'=>'float', 'bgdcolor'=>'int', 'ignoretransparent='=>'int'],
'imagescale' => ['resource|false', 'im'=>'resource', 'new_width'=>'int', 'new_height='=>'int', 'method='=>'int'],
'imagejpeg' => ['bool', 'im'=>'resource', 'filename='=>'?string', 'quality='=>'int'],
'imagepng' => ['bool', 'im'=>'resource', 'filename='=>'?string', 'quality='=>'int', 'filters='=>'int'],
'imagegif' => ['bool', 'im'=>'resource', 'filename='=>'?string'],
'imagewbmp' => ['bool', 'im'=>'resource', 'filename='=>'?string', 'foreground='=>'int'],
'imagecopyresampled' => ['bool', 'dst_im'=>'resource', 'src_im'=>'resource', 'dst_x'=>'int', 'dst_y'=>'int', 'src_x'=>'int', 'src_y'=>'int', 'dst_w'=>'int', 'dst_h'=>'int', 'src_w'=>'int', 'src_h'=>'int'],
'imagedestroy' => ['bool', 'im'=>'resource'],
'imagecopy' => ['bool', 'dst_im'=>'resource', 'src_im'=>'resource', 'dst_x'=>'int', 'dst_y'=>'int', 'src_x'=>'int', 'src_y'=>'int', 'src_w'=>'int', 'src_h'=>'int'],
'imagecopymerge' => ['bool', 'src_im'=>'resource', 'dst_im'=>'resource', 'dst_x'=>'int', 'dst_y'=>'int', 'src_x'=>'int', 'src_y'=>'int', 'src_w'=>'int', 'src_h'=>'int', 'pct'=>'int'],
'imagecopymergegray' => ['bool', 'src_im'=>'resource', 'dst_im'=>'resource', 'dst_x'=>'int', 'dst_y'=>'int', 'src_x'=>'int', 'src_y'=>'int', 'src_w'=>'int', 'src_h'=>'int', 'pct'=>'int'],
'imagecopyresampled' => ['bool', 'dst_im'=>'resource', 'src_im'=>'resource', 'dst_x'=>'int', 'dst_y'=>'int', 'src_x'=>'int', 'src_y'=>'int', 'dst_w'=>'int', 'dst_h'=>'int', 'src_w'=>'int', 'src_h'=>'int'],
'imagecopyresized' => ['bool', 'dst_im'=>'resource', 'src_im'=>'resource', 'dst_x'=>'int', 'dst_y'=>'int', 'src_x'=>'int', 'src_y'=>'int', 'dst_w'=>'int', 'dst_h'=>'int', 'src_w'=>'int', 'src_h'=>'int'],
'imagesx' => ['int|false', 'im'=>'resource'],
'imagesy' => ['int|false', 'im'=>'resource'],
'imagesavealpha' => ['bool', 'im'=>'resource', 'on'=>'bool'],
'imagefill' => ['bool', 'im'=>'resource', 'x'=>'int', 'y'=>'int', 'col'=>'int'],
'imagefilledarc' => ['bool', 'im'=>'resource', 'cx'=>'int', 'cy'=>'int', 'w'=>'int', 'h'=>'int', 's'=>'int', 'e'=>'int', 'col'=>'int', 'style'=>'int'],
'imagefilledellipse' => ['bool', 'im'=>'resource', 'cx'=>'int', 'cy'=>'int', 'w'=>'int', 'h'=>'int', 'color'=>'int'],
'imagefilledpolygon' => ['bool', 'im'=>'resource', 'point'=>'array', 'num_points'=>'int', 'col'=>'int'],
'imagefilledrectangle' => ['bool', 'im'=>'resource', 'x1'=>'int', 'y1'=>'int', 'x2'=>'int', 'y2'=>'int', 'col'=>'int'],
'imagefilltoborder' => ['bool', 'im'=>'resource', 'x'=>'int', 'y'=>'int', 'border'=>'int', 'col'=>'int'],
'jpeg2wbmp' => ['bool', 'jpegname'=>'string', 'wbmpname'=>'string', 'dest_height'=>'int', 'dest_width'=>'int', 'threshold'=>'int'],
'ldap_sort' => ['bool', 'link_identifier'=>'resource', 'result_identifier'=>'resource', 'sortfilter'=>'string'],
'mb_decode_numericentity' => ['string|false', 'string'=>'string', 'convmap'=>'array', 'encoding='=>'string', 'is_hex='=>'bool'],
'mktime' => ['int|false', 'hour='=>'int', 'minute='=>'int', 'second='=>'int', 'month='=>'int', 'day='=>'int', 'year='=>'int'],
'parse_str' => ['void', 'encoded_string'=>'string', '&w_result='=>'array'],
'password_hash' => ['string|false|null', 'password'=>'string', 'algo'=>'?string|?int', 'options='=>'array'],
'png2wbmp' => ['bool', 'pngname'=>'string', 'wbmpname'=>'string', 'dest_height'=>'int', 'dest_width'=>'int', 'threshold'=>'int'],
'proc_get_status' => ['array<string,int|string|bool>|false', 'process'=>'resource'],
'read_exif_data' => ['array', 'filename'=>'string', 'sections_needed='=>'string', 'sub_arrays='=>'bool', 'read_thumbnail='=>'bool'],
'sodium_crypto_aead_chacha20poly1305_ietf_decrypt' => ['?string|?false', 'confidential_message'=>'string', 'public_message'=>'string', 'nonce'=>'string', 'key'=>'string'],
'SplFileObject::fgetss' => ['string|false', 'allowable_tags='=>'string'],
'strchr' => ['string|false', 'haystack'=>'string', 'needle'=>'string|int', 'before_needle='=>'bool'],
'stripos' => ['int|false', 'haystack'=>'string', 'needle'=>'string|int', 'offset='=>'int'],
'stristr' => ['string|false', 'haystack'=>'string', 'needle'=>'string|int', 'before_needle='=>'bool'],
'strpos' => ['int|false', 'haystack'=>'string', 'needle'=>'string|int', 'offset='=>'int'],
'strrchr' => ['string|false', 'haystack'=>'string', 'needle'=>'string|int'],
'strripos' => ['int|false', 'haystack'=>'string', 'needle'=>'string|int', 'offset='=>'int'],
'strrpos' => ['int|false', 'haystack'=>'string', 'needle'=>'string|int', 'offset='=>'int'],
'strstr' => ['string|false', 'haystack'=>'string', 'needle'=>'string|int', 'before_needle='=>'bool'],
'version_compare' => ['int|bool', 'version1'=>'string', 'version2'=>'string', 'operator='=>'\'\x3c\'|\'lt\'|\'\x3c=\'|\'le\'|\'\x3e\'|\'gt\'|\'\x3e=\'|\'ge\'|\'==\'|\'=\'|\'eq\'|\'!=\'|\'\x3c\x3e\'|\'ne\''],
'xml_parser_create' => ['resource', 'encoding='=>'string'],
'xml_parser_create_ns' => ['resource', 'encoding='=>'string', 'sep='=>'string'],
'xml_parser_free' => ['bool', 'parser'=>'resource'],
'xml_parser_get_option' => ['mixed|false', 'parser'=>'resource', 'option'=>'int'],
'xml_parser_set_option' => ['bool', 'parser'=>'resource', 'option'=>'int', 'value'=>'mixed'],
'xmlwriter_end_attribute' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_end_cdata' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_end_comment' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_end_document' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_end_dtd' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_end_dtd_attlist' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_end_dtd_element' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_end_dtd_entity' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_end_element' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_end_pi' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_flush' => ['mixed', 'xmlwriter'=>'resource', 'empty='=>'bool'],
'xmlwriter_full_end_element' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_open_memory' => ['resource'],
'xmlwriter_open_uri' => ['resource', 'source'=>'string'],
'xmlwriter_output_memory' => ['string', 'xmlwriter'=>'resource', 'flush='=>'bool'],
'xmlwriter_set_indent' => ['bool', 'xmlwriter'=>'resource', 'indent'=>'bool'],
'xmlwriter_set_indent_string' => ['bool', 'xmlwriter'=>'resource', 'indentstring'=>'string'],
'xmlwriter_start_attribute' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string'],
'xmlwriter_start_attribute_ns' => ['bool', 'xmlwriter'=>'resource', 'prefix'=>'string', 'name'=>'string', 'uri'=>'string'],
'xmlwriter_start_cdata' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_start_comment' => ['bool', 'xmlwriter'=>'resource'],
'xmlwriter_start_document' => ['bool', 'xmlwriter'=>'resource', 'version='=>'string', 'encoding='=>'string', 'standalone='=>'string'],
'xmlwriter_start_dtd' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string', 'publicid='=>'string', 'sysid='=>'string'],
'xmlwriter_start_dtd_attlist' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string'],
'xmlwriter_start_dtd_element' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string'],
'xmlwriter_start_dtd_entity' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string', 'isparam'=>'bool'],
'xmlwriter_start_element' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string'],
'xmlwriter_start_element_ns' => ['bool', 'xmlwriter'=>'resource', 'prefix'=>'string', 'name'=>'string', 'uri'=>'string'],
'xmlwriter_start_pi' => ['bool', 'xmlwriter'=>'resource', 'target'=>'string'],
'xmlwriter_text' => ['bool', 'xmlwriter'=>'resource', 'content'=>'string'],
'xmlwriter_write_attribute' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string', 'content'=>'string'],
'xmlwriter_write_attribute_ns' => ['bool', 'xmlwriter'=>'resource', 'prefix'=>'string', 'name'=>'string', 'uri'=>'string', 'content'=>'string'],
'xmlwriter_write_cdata' => ['bool', 'xmlwriter'=>'resource', 'content'=>'string'],
'xmlwriter_write_comment' => ['bool', 'xmlwriter'=>'resource', 'content'=>'string'],
'xmlwriter_write_dtd' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string', 'publicid='=>'string', 'sysid='=>'string', 'subset='=>'string'],
'xmlwriter_write_dtd_attlist' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string', 'content'=>'string'],
'xmlwriter_write_dtd_element' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string', 'content'=>'string'],
'xmlwriter_write_dtd_entity' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string', 'content'=>'string', 'pe'=>'bool', 'publicid'=>'string', 'sysid'=>'string', 'ndataid'=>'string'],
'xmlwriter_write_element' => ['bool', 'xmlwriter'=>'resource', 'name'=>'string', 'content'=>'string'],
'xmlwriter_write_element_ns' => ['bool', 'xmlwriter'=>'resource', 'prefix'=>'string', 'name'=>'string', 'uri'=>'string', 'content'=>'string'],
'xmlwriter_write_pi' => ['bool', 'xmlwriter'=>'resource', 'target'=>'string', 'content'=>'string'],
'xmlwriter_write_raw' => ['bool', 'xmlwriter'=>'resource', 'content'=>'string'],
]
];

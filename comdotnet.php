<?php

// php_com_dotnet PECL

/**
 * Increases the components reference counter.
 * @link http://php.net/manual/en/function.com-addref.php
 * @return void
 * @deprecated
 */
function com_addref () { }

/**
 * <p>Generates a Globally Unique Identifier (GUID).</p>
 * <p>A GUID is generated in the same way as DCE UUID's, except that the Microsoft convention is to 
 * enclose a GUID in curly braces.</p>
 * @link http://php.net/manual/en/function.com-create-guid.php
 * @return string Returns the GUID as a string.
 */
function com_create_guid () { }

/**
 * <p>Instructs COM to sink events generated by comobject into the PHP object sinkobject.</p>
 * <p>Be careful how you use this feature; if you are doing something similar to the example below, then 
 * it doesn't really make sense to run it in a web server context.</p>
 * @link http://php.net/manual/en/function.com-event-sink.php
 * @param variant $comobject <p>
 * 
 * </p>
 * @param object $sinkobject <p>
 * sinkobject should be an instance of a class with methods named after those of the desired 
 * dispinterface; you may use com_print_typeinfo() to help generate a template class for this purpose.
 * </p>
 * @param mixed $sinkinterface <p>
 * PHP will attempt to use the default dispinterface type specified by the typelibrary associated with 
 * comobject, but you may override this choice by setting sinkinterface to the name of the 
 * dispinterface that you want to use.
 * </p>
 * @return bool Returns TRUE on success or FALSE on failure.
 */
function com_event_sink ($comobject, $sinkobject, $sinkinterface) { }

/**
 * com_get_active_object() is similar to creating a new instance of a COM object, except that it will 
 * only return an object to your script if the object is already running. OLE applications use 
 * something known as the "Running Object Table" to allow well-known applications to be launched only 
 * once; this function exposes the COM library function GetActiveObject() to get a handle on a running 
 * instance.
 * @link http://php.net/manual/en/function.com-get-active-object.php
 * @param string $progid <p>
 * progid must be either the ProgID or CLSID for the object that you want to access (for example 
 * Word.Application).
 * </p>
 * @param int $code_page <p>
 * Acts in precisely the same way that it does for the COM class.
 * </p>
 * @return variant If the requested object is running, it will be returned to your script just like any other COM 
 * object.
 */
function com_get_active_object ($progid, $code_page) { }

/**
 * Checks to see if a COM object can be enumerated using the Next() method hack. See COM class for more 
 * details on these methods.
 * @link http://php.net/manual/en/function.com-isenum.php
 * @param variant $com_module <p>
 * The COM object.
 * </p>
 * @return bool Returns TRUE if the object can be enumerated, FALSE otherwise.
 */
function com_isenum ($com_module) { }

/**
 * <p>Loads a type-library and registers its constants in the engine, as though they were defined using 
 * define().</p>
 * <p>Note that it is much more efficient to use the configuration setting to pre-load and register the 
 * constants, although not so flexible.</p>
 * <p>If you have turned on , then PHP will attempt to automatically register the constants associated 
 * with a COM object when you instantiate it. This depends on the interfaces provided by the COM object 
 * itself, and may not always be possible.</p>
 * @link http://php.net/manual/en/function.com-load-typelib.php
 * @param string $typelib_name <p>
 * typelib_name can be one of the following:</p><ul>
 * <li>The filename of a .tlb file or the executable module that contains the type library. 
 * <li>The type library GUID, followed by its version number, for example {00000200-0000-0010-8000-00AA006D2EA4},2,0.</li>
 * <li>The type library name, e.g. Microsoft OLE DB ActiveX Data Objects 1.0 Library.</li>
 * </ul><p>PHP will attempt to resolve the type library in this order, as the process gets more and more expensive 
 * as you progress down the list; searching for the type library by name is handled by physically enumerating 
 * the registry until we find a match.
 * </p>
 * @param bool $case_insensitive <p>
 * The case_insensitive behaves in the same way as the parameter with the same name in the define() 
 * function.
 * </p>
 * @return bool Returns TRUE on success or FALSE on failure.
 */
function com_load_typelib ($typelib_name, $case_insensitive = true) { }

/**
 * <p>This function will sleep for up to timeoutms milliseconds, or until a message arrives in the queue.</p>
 * <p>The purpose of this function is to route COM calls between apartments and handle various 
 * synchronization issues. This allows your script to wait efficiently for events to be triggered, 
 * while still handling other events or running other code in the background. You should use it in a 
 * loop, as demonstrated by the example in the com_event_sink() function, until you are finished using 
 * event bound COM objects.</p>
 * @link http://php.net/manual/en/function.com-message-pump.php
 * @param int $timeoutms <p>
 * The timeout, in milliseconds. If you do not specify a value for timeoutms, then 0 will be assumed. A 
 * 0 value means that no waiting will be performed; if there are messages pending they will be 
 * dispatched as before; if there are no messages pending, the function will return FALSE immediately 
 * without sleeping.
 * </p>
 * @return bool If a message or messages arrives before the timeout, they will be dispatched, and the function will 
 * return TRUE. If the timeout occurs and no messages were processed, the return value will be FALSE.
 */
function com_message_pump ($timeoutms = 0) { }

/**
 * The purpose of this function is to help generate a skeleton class for use as an event sink. You may 
 * also use it to generate a dump of any COM object, provided that it supports enough of the 
 * introspection interfaces, and that you know the name of the interface you want to display.
 * @link http://php.net/manual/en/function.com-print-typeinfo.php
 * @param object $comobject <p>
 * comobject should be either an instance of a COM object, or be the name of a typelibrary (which will 
 * be resolved according to the rules set out in com_load_typelib()).
 * </p>
 * @param string $dispinterface <p>
 * The name of an IDispatch descendant interface that you want to display.
 * </p>
 * @param bool $wantsink <p>
 * If set to TRUE, the corresponding sink interface will be displayed instead.
 * </p>
 * @return bool Returns TRUE on success or FALSE on failure.
 */
function com_print_typeinfo ($comobject, $dispinterface, $wantsink = false) { }

/**
 * Returns the absolute value of a variant.
 * @link http://php.net/manual/en/function.variant-abs.php
 * @param mixed $val <p>
 * The variant.
 * </p>
 * @return mixed Returns the absolute value of val.
 */
function variant_abs ($val) { }

/**
 * <p>Adds left to right using the following rules (taken from the MSDN library), which correspond to 
 * those of Visual Basic:</p><ul>
 * <li><b>IF</b> - Both expressions are of the string type - <b>THEN</b> - Concatenation</li>
 * <li><b>IF</b> - One expression is a string type and the other a character - <b>THEN</b> - Addition</li>
 * <li><b>IF</b> - One expression is numeric and the other is a string - <b>THEN</b> - Addition</li>
 * <li><b>IF</b> - Both expressions are numeric - <b>THEN</b> - Addition</li>
 * <li><b>IF</b> - Either expression is NULL - <b>THEN</b> - NULL is returned</li>
 * <li><b>IF</b> - Both expressions are empty - <b>THEN</b> - Integer subtype is returned</li>
 * </ul>
 * @link http://php.net/manual/en/function.variant-add.php
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed Returns the result.
 */
function variant_add ($left, $right) { }

/**
 * Performs a bitwise AND operation. Note that this is slightly different from a regular AND operation.
 * @link http://php.net/manual/en/function.variant-and.php
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed 
 */
function variant_and ($left, $right) { }

/**
 * <p>This function makes a copy of variant and then performs a variant cast operation to force the copy 
 * to have the type given by type.</p>
 * <p>This function wraps VariantChangeType() in the COM library; consult MSDN for more information.</p>
 * @link http://php.net/manual/en/function.variant-cast.php
 * @param variant $variant <p>
 * The variant.
 * </p>
 * @param int $type <p>
 * type should be one of the VT_XXX constants.
 * </p>
 * @return variant Returns a VT_DATE variant.
 */
function variant_cast ($variant, $type) { }

/**
 * <p>Concatenates left with right and returns the result.</p>
 * <p>This function is notionally equivalent to $left . $right.</p>
 * @link http://php.net/manual/en/function.variant-cat.php
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed Returns the result of the concatenation.
 */
function variant_cat ($left, $right) { }

/**
 * <p>Compares left with right.</p>
 * <p>This function will only compare scalar values, not arrays or variant records.</p>
 * @link http://php.net/manual/en/function.variant-cmp.php
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @param int $lcid <p>
 * A valid Locale Identifier to use when comparing strings (this affects string collation).
 * </p>
 * @param int $flags <p>
 * flags can be one or more of the following values OR'd together, and affects string comparisons:</p><ul>
 * <li>NORM_IGNORECASE - Compare case insensitively</li>
 * <li>NORM_IGNORENONSPACE - Ignore nonspacing characters</li>
 * <li>NORM_IGNORESYMBOLS - Ignore symbols</li>
 * <li>NORM_IGNOREWIDTH - Ignore string width</li>
 * <li>NORM_IGNOREKANATYPE - Ignore Kana type</li>
 * <li>NORM_IGNOREKASHIDA - Ignore Arabic kashida characters</li>
 * </ul>
 * @return int <p>Returns one of the following:</p><ul>
 * <li>VARCMP_LT - left is less than right</li>
 * <li>VARCMP_EQ - left is equal to right</li>
 * <li>VARCMP_GT - left is greater than right</li>
 * <li>VARCMP_NULL - Either left, right or both are NULL</li>
 * </ul>
 */
function variant_cmp ($left, $right, $lcid, $flags) { }

/**
 * Converts timestamp from a unix timestamp value into a variant of type VT_DATE. This allows easier 
 * interopability between the unix-ish parts of PHP and COM.
 * @link http://php.net/manual/en/function.variant-date-from-timestamp.php
 * @param int $timestamp <p>
 * A unix timestamp.
 * </p>
 * @return variant Returns a VT_DATE variant.
 */
function variant_date_from_timestamp ($timestamp) { }

/**
 * Converts variant from a VT_DATE (or similar) value into a Unix timestamp. This allows easier 
 * interopability between the Unix-ish parts of PHP and COM.
 * @link http://php.net/manual/en/function.variant-date-to-timestamp.php
 * @param variant $variant <p>
 * The variant.
 * </p>
 * @return int Returns a unix timestamp.
 */
function variant_date_to_timestamp ($variant) { }

/**
 * Divides left by right and returns the result.
 * @link http://php.net/manual/en/function.variant-div.php
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed 
 */
function variant_div ($left, $right) { }

/**
 * Performs a bitwise equivalence on two variants.
 * @link http://php.net/manual/en/function.variant-eqv.php
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed If each bit in left is equal to the corresponding bit in right then TRUE is returned, otherwise 
 * FALSE is returned.
 */
function variant_eqv ($left, $right) { }

/**
 * Gets the integer portion of a variant.
 * @link http://php.net/manual/en/function.variant-fix.php
 * @param mixed $variant <p>
 * The variant.
 * </p>
 * @return mixed If variant is negative, then the first negative integer greater than or equal to the variant is 
 * returned, otherwise returns the integer portion of the value of variant.
 */
function variant_fix ($variant) { }

/**
 * Returns the type of a variant object.
 * @link http://php.net/manual/en/function.variant-get-type.php
 * @param variant $variant <p>
 * The variant object.
 * </p>
 * @return int This function returns an integer value that indicates the type of variant, which can be an instance 
 * of COM, DOTNET or VARIANT classes. The return value can be compared to one of the VT_XXX constants.
 */
function variant_get_type ($variant) { }

/**
 * Converts left and right to integer values, and then performs integer division.
 * @link http://php.net/manual/en/function.variant-idiv.php
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed 
 */
function variant_idiv ($left, $right) { }

/**
 * Performs a bitwise implication operation.
 * @link http://php.net/manual/en/function.variant-imp.php
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed 
 */
function variant_imp ($left, $right) { }

/**
 * Gets the integer portion of a variant.
 * @link http://php.net/manual/en/function.variant-int.php
 * @param mixed $variant <p>
 * The variant.
 * </p>
 * @return mixed If variant is negative, then the first negative integer greater than or equal to the variant is 
 * returned, otherwise returns the integer portion of the value of variant.
 */
function variant_int ($variant) { }

/**
 * Divides left by right and returns the remainder.
 * @link http://php.net/manual/en/function.variant-mod.php
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed Returns the remainder of the division.
 */
function variant_mod ($left, $right) { }

/**
 * Multiplies left by right.
 * @link http://php.net/manual/en/function.variant-mul.php
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed 
 */
function variant_mul ($left, $right) { }

/**
 * Performs logical negation of variant.
 * @link http://php.net/manual/en/function.variant-neg.php
 * @param mixed $variant <p>
 * The variant.
 * </p>
 * @return mixed Returns the result of the logical negation.
 */
function variant_neg ($variant) { }

/**
 * Performs bitwise not negation on variant and returns the result.
 * @link http://php.net/manual/en/function.variant-not.php
 * @param mixed $variant <p>
 * The variant.
 * </p>
 * @return mixed Returns the bitwise not negation. If variant is NULL, the result will also be NULL.
 */
function variant_not ($variant) { }

/**
 * Performs a bitwise OR operation. Note that this is slightly different from a regular OR operation.
 * @link http://php.net/manual/en/function.variant-or.php
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed 
 */
function variant_or ($left, $right) { }

/**
 * Returns the result of left to the power of right.
 * @link http://php.net/manual/en/function.variant-pow.php
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed Returns the result of left to the power of right.
 */
function variant_pow ($left, $right) { }

/**
 * Returns the value of variant rounded to decimals decimal places.
 * @link http://php.net/manual/en/function.variant-round.php
 * @param mixed $variant <p>
 * The variant.
 * </p>
 * @param int $decimals <p>
 * Number of decimal places.
 * </p>
 * @return mixed Returns the rounded value.
 */
function variant_round ($variant, $decimals) { }

/**
 * This function is similar to variant_cast() except that the variant is modified "in-place"; no new 
 * variant is created. The parameters for this function have identical meaning to those of 
 * variant_cast().
 * @link http://php.net/manual/en/function.variant-set-type.php
 * @param variant $variant <p>
 * The variant.
 * </p>
 * @param int $type <p>
 * 
 * </p>
 * @return void
 */
function variant_set_type ($variant, $type) { }

/**
 * Converts value to a variant and assigns it to the variant object; no new variant object is created, 
 * and the old value of variant is freed/released.
 * @link http://php.net/manual/en/function.variant-set.php
 * @param variant $variant <p>
 * The variant.
 * </p>
 * @param mixed $value <p>
 * 
 * </p>
 * @return void
 */
function variant_set ($variant, $value) { }

/**
 * Subtracts right from left.
 * @link http://php.net/manual/en/function.variant-sub.php
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed 
 */
function variant_sub ($left, $right) { }

/**
 * Performs a logical exclusion.
 * @link http://php.net/manual/en/function.variant-xor.php
 * @param mixed $left <p>
 * The left operand.
 * </p>
 * @param mixed $right <p>
 * The right operand.
 * </p>
 * @return mixed 
 */
function variant_xor ($left, $right) { }

/**
 * The COM class allows you to instantiate an OLE compatible COM object and call its methods and access its properties.
 */
class COM 
{
   /**
    * The returned object is an overloaded object, which means that PHP does not see any fixed methods as it does with 
    * regular classes; instead, any property or method accesses are passed through to COM. 
    * @link http://php.net/manual/en/class.com.php
    * @param string $module_name <p>
    * Can be a ProgID, Class ID or Moniker that names the component to load. A ProgID is typically the 
    * application or DLL name, followed by a period, followed by the object name. e.g: Word.Application. A 
    * Class ID is the UUID that uniquely identifies a given class. A Moniker is a special form of naming, 
    * similar in concept to a URL scheme, that identifies a resource and specifies how it should be 
    * loaded. As an example, you could load up Word and get an object representing a word document by 
    * specifying the full path to the word document as the module name, or you can use LDAP: as a moniker 
    * to use the ADSI interface to LDAP.
    * </p>
    * @param mixed $server_name <p>
    * The name of the DCOM server on which the component should be loaded and run. If NULL, the object is 
    * run using the default for the application. The default is typically to run it on the local machine, 
    * although the administrator might have configured the application to launch on a different machine. 
    * If you specify a non-NULL value for server, PHP will refuse to load the object unless the 
    * configuration option is set to TRUE.</p><p>
    * If server_name is an array, it should contain the following elements (case sensitive!). Note that 
    * they are all optional (although you need to specify both Username and Password together); if you 
    * omit the Server setting, the default server will be used (as mentioned above), and the instantiation 
    * of the object will not be affected by the directive.
    * </p><ul>
    * <li>Server - (string) The name of the server.</li>
    * <li>Username - (string) The username to connect as.</li>
    * <li>Password - (string) The password for Username.</li>
    * <li>Flags - (integer) One or more of the following constants, logically OR'd together: CLSCTX_INPROC_SERVER, CLSCTX_INPROC_HANDLER, CLSCTX_LOCAL_SERVER, CLSCTX_REMOTE_SERVER, CLSCTX_SERVER and CLSCTX_ALL. The default value if not specified here is CLSCTX_SERVER if you also omit Server, or CLSCTX_REMOTE_SERVER if you do specify a server. You should consult the Microsoft documentation for CoCreateInstance for more information on the meaning of these constants; you will typically never have to use them.</li>
    * </ul>
    * @param int $codepage <p>
    * Specifies the codepage that is used to convert strings to unicode-strings and vice versa. The 
    * conversion is applied whenever a PHP string is passed as a parameter or returned from a method of 
    * this COM object. The code page is sticky in PHP 5, which means that it will propagate to objects and 
    * variants returned from the object. Possible values are CP_ACP (use system default ANSI code page - 
    * the default if this parameter is omitted), CP_MACCP, CP_OEMCP, CP_SYMBOL, CP_THREAD_ACP (use 
    * codepage/locale set for the current executing thread), CP_UTF7 and CP_UTF8. You may also use the 
    * number for a given codepage; consult the Microsoft documentation for more details on codepages and 
    * their numeric values.
    * </p>
    * @param string $typelib <p>
    * 
    * </p>
    * @return COM
    */
   public function __construct ($module_name, $server_name = null, $codepage = CP_ACP, $typelib = '') { }
   
   /**
    * Returns a variant representing a SafeArray that has 10 elements; each element will be an empty/null variant. 
    * This function was supposed to return an array containing all the elements from the iterator, 
    * but was never completed. Do not use.
    * @link http://php.net/manual/en/class.com.php#com.all
    * @return VARIANT
    */
   public function All () { }
   
   /**
    * Returns a variant representing the next element available from the iterator, or FALSE when there are no more elements.
    * @link http://php.net/manual/en/class.com.php#com.next
    * @return VARIANT
    */
   public function Next () { }
   
   /**
    * Returns a variant representing the previous element available from the iterator, or FALSE when there are no more elements. 
    * @link http://php.net/manual/en/class.com.php#com.prev
    * @return VARIANT
    */
   public function Prev () { }
   
   /**
    * Rewinds the iterator back to the start. 
    * @link http://php.net/manual/en/class.com.php#com.reset
    * @return VARIANT
    */
   public function Reset () { }
}

/**
 * The DOTNET class allows you to instantiate a class from a .Net assembly and call its methods and access its properties.
 */
class DOTNET
{
   /**
    * The returned object is an overloaded object, which means that PHP does not see any fixed methods as it does with 
    * regular classes; instead, any property or method accesses are passed through to COM and from there to DOTNET. 
    * In other words, the .Net object is mapped through the COM interoperability layer provided by the .Net runtime.
    * @link http://php.net/manual/en/class.dotnet.php
    * @param string $assembly_name <p>
    * Specifies which assembly should be loaded
    * </p>
    * @param string $class_name <p>
    * Specifices which class in that assembly to instantiate
    * </p>
    * @param int $codepage <p>
    * Specify a codepage to use for unicode string transformations
    * </p>
    * @return DOTNET
    */
   public function __construct ($assembly_name, $class_name, $codepage = CP_ACP) { }
}

/**
 * The VARIANT is COM's equivalent of the PHP zval; it is a structure that can contain a value with a range of 
 * different possible types. The VARIANT class provided by the COM extension allows you to have more control 
 * over the way that PHP passes values to and from COM. 
 */
class VARIANT
{
   /**
    * 
    * @link 
    * @param mixed $value <p>
    * Initial value, if omitted, or set to NULL an VT_EMPTY object is created.
    * </p>
    * @param int $type <p>
    * Specifies the content type of the VARIANT object. Possible values are one of the VT_XXX Predefined Constants. 
    * In PHP versions prior to PHP 5, you could force PHP to pass a variant object by reference by OR'ing VT_BYREF 
    * with the type. In PHP 5, this hack is not supported; instead, PHP 5 can detect parameters passed by reference 
    * automatically; they do not even need to be passed as VARIANT objects. Consult the MSDN library for additional 
    * information on the VARIANT type. 
    * </p>
    * @param int $codepage <p>
    * Specifies the codepage that is used to convert strings to unicode. 
    * </p>
    * @return VARIANT
    */
   public function __construct ($value, $type = VT_EMPTY,$codepage = CP_ACP) { }
}


/**
 * The code that creates and manages objects of this class is a DLL that runs in the same process as the caller 
 * of the function specifying the class context.
 */
define('CLSCTX_INPROC_SERVER', 1);

/**
 * The code that manages objects of this class is an in-process handler. This is a DLL that runs in the 
 * client process and implements client-side structures of this class when instances of the class are accessed remotely.
 */
define('CLSCTX_INPROC_HANDLER', 2);

/**
 * The EXE code that creates and manages objects of this class runs on same machine but is loaded in a 
 * separate process space.
 */
define('CLSCTX_LOCAL_SERVER', 4);

/**
 * A remote context. The code that creates and manages objects of this class is run on a different computer.
 */
define('CLSCTX_REMOTE_SERVER', 16);

/**
 * Indicates server code, whether in-process, local, or remote. This definition ORs CLSCTX_INPROC_SERVER, 
 * CLSCTX_LOCAL_SERVER, and CLSCTX_REMOTE_SERVER.
 */
define('CLSCTX_SERVER', 21);

/**
 * Indicates all class contexts. This definition ORs CLSCTX_INPROC_HANDLER and CLSCTX_SERVER.
 */
define('CLSCTX_ALL', 23);

/**
 * NULL pointer reference.
 */
define('VT_NULL', 1);

/**
 * A property with a type indicator of VT_EMPTY has no data associated with it; that is, the size 
 * of the value is zero.
 */
define('VT_EMPTY', 0);

/**
 * 1-byte unsigned integer.
 */
define('VT_UI1', 17);

/**
 * Two bytes representing a 2-byte signed integer value.
 */
define('VT_I2', 2);

/**
 * 4-byte signed integer value.
 */
define('VT_I4', 3);

/**
 * 32-bit IEEE floating point value.
 */
define('VT_R4', 4);

/**
 * 64-bit IEEE floating point value.
 */
define('VT_R8', 5);

/**
 * Boolean value.
 */
define('VT_BOOL', 11);

/**
 * Error code; containing the status code associated with the error.
 */
define('VT_ERROR', 10);

/**
 * 8-byte two's complement integer (scaled by 10,000).
 */
define('VT_CY', 6);

/**
 * A 64-bit floating point number representing the number of days (not seconds) since December 31, 1899. 
 * For example, January 1, 1900, is 2.0, January 2, 1900, is 3.0, and so on). This is stored in the same 
 * representation as VT_R8.
 */
define('VT_DATE', 7);

/**
 * Pointer to a null-terminated Unicode string.
 */
define('VT_BSTR', 8);

/**
 * A decimal structure.
 */
define('VT_DECIMAL', 14);

/**
 * A pointer to an object that implements the IUnknown interface.
 */
define('VT_UNKNOWN', 13);

/**
 * A pointer to a pointer to an object was specified.
 */
define('VT_DISPATCH', 9);

/**
 * A type indicator followed by the corresponding value. VT_VARIANT can be used only with VT_BYREF.
 */
define('VT_VARIANT', 12);

/**
 * 1-byte signed integer.
 */
define('VT_I1', 16);

/**
 * 2-byte unsigned integer.
 */
define('VT_UI2', 18);

/**
 * 4-byte unsigned integer.
 */
define('VT_UI4', 19);

/**
 * 4-byte signed integer value (equivalent to VT_I4).
 */
define('VT_INT', 22);

/**
 * 4-byte unsigned integer (equivalent to VT_UI4).
 */
define('VT_UINT', 23);

/**
 * If the type indicator is combined with VT_ARRAY by an OR operator, the value is a pointer to a SAFEARRAY. 
 * VT_ARRAY can use the OR with the following data types: VT_I1, VT_UI1, VT_I2, VT_UI2, VT_I4, VT_UI4, VT_INT, 
 * VT_UINT, VT_R4, VT_R8, VT_BOOL, VT_DECIMAL, VT_ERROR, VT_CY, VT_DATE, VT_BSTR, VT_DISPATCH, VT_UNKNOWN and VT_VARIANT.
 */
define('VT_ARRAY', 8192);

/**
 * If the type indicator is combined with VT_BYREF by an OR operator, the value is a reference. Reference 
 * types are interpreted as a reference to data, similar to the reference type in C++.
 */
define('VT_BYREF', 16384);

/**
 * Default to ANSI code page.
 */
define('CP_ACP', 0);

/**
 * Macintosh code page.
 */
define('CP_MACCP', 2);

/**
 * Default to OEM code page.
 */
define('CP_OEMCP', 1);

/**
 * Unicode (UTF-7).
 */
define('CP_UTF7', 65000);

/**
 * Unicode (UTF-8).
 */
define('CP_UTF8', 65001);

/**
 * SYMBOL translations.
 */
define('CP_SYMBOL', 42);

/**
 * Current thread's ANSI code page
 */
define('CP_THREAD_ACP', 3);

/**
 * The left bstr is less than right bstr.
 */
define('VARCMP_LT', 0);

/**
 * The two parameters are equal.
 */
define('VARCMP_EQ', 1);

/**
 * The left bstr is greater than right bstr.
 */
define('VARCMP_GT', 2);

/**
 * Either expression is NULL.
 */
define('VARCMP_NULL', 3);

/**
 * Ignore case sensitivity.
 */
define('NORM_IGNORECASE', 1);

/**
 * Ignore nonspacing characters.
 */
define('NORM_IGNORENONSPACE', 2);

/**
 * Ignore symbols.
 */
define('NORM_IGNORESYMBOLS', 4);

/**
 * Ignore string width.
 */
define('NORM_IGNOREWIDTH', 131072);

/**
 * Ignore Kana type.
 */
define('NORM_IGNOREKANATYPE', 65536);

/**
 * Ignore Arabic kashida characters.
 */
define('NORM_IGNOREKASHIDA', 262144);

/**
 * A return error that indicates a divide by zero error.
 */
define('DISP_E_DIVBYZERO', -2147352558);

/**
 * An error that indicates that a value could not be coerced to its expected representation.
 */
define('DISP_E_OVERFLOW', -2147352566);

/**
 * iMoniker COM status code, return on errors where the function call failed due to unavailability.
 */
define('MK_E_UNAVAILABLE', -2147221021);


// end php_com_dotnet PECL

?>
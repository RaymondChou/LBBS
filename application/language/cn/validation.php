<?php 

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used
	| by the validator class. Some of the rules contain multiple versions,
	| such as the size (max, min, between) rules. These versions are used
	| for different input types such as strings and files.
	|
	| These language lines may be easily changed to provide custom error
	| messages in your application. Error messages for custom validation
	| rules may also be added to this file.
	|
	*/

	"accepted"       => ":attribute 必须允许",
	"active_url"     => ":attribute 不是一个有效的链接",
	"after"          => ":attribute 必须在:date日期之后",
	"alpha"          => ":attribute 只能包含英文字母",
	"alpha_dash"     => ":attribute 只能包含字母,数字和符号",
	"alpha_num"      => ":attribute 只能包含字母和数字",
	"array"          => ":attribute 只能包含选项",
	"before"         => ":attribute 必须在:date日期之前",
	"between"        => array(
		"numeric" => ":attribute 范围必须是:min - :max.",
		"file"    => ":attribute 范围必须是 :min - :max kb.",
		"string"  => ":attribute 范围必须是 :min - :max 个字符.",
	),
	"confirmed"      => ":attribute 不相符",
	"count"          => "The :attribute must have exactly :count selected elements.",
	"countbetween"   => "The :attribute must have between :min and :max selected elements.",
	"countmax"       => "The :attribute must have less than :max selected elements.",
	"countmin"       => "The :attribute must have at least :min selected elements.",
	"different"      => "The :attribute and :other must be different.",
	"email"          => ":attribute 必须是一个有效的邮箱地址",
	"exists"         => "The selected :attribute is invalid.",
	"image"          => "The :attribute must be an image.",
	"in"             => "The selected :attribute is invalid.",
	"integer"        => "The :attribute must be an integer.",
	"ip"             => "The :attribute must be a valid IP address.",
	"match"          => "The :attribute format is invalid.",
	"max"            => array(
		"numeric" => ":attribute 必须小于 :max.",
		"file"    => ":attribute 必须小于 :max kb.",
		"string"  => ":attribute 必须小于 :max 个字符.",
	),
	"mimes"          => "The :attribute must be a file of type: :values.",
	"min"            => array(
		"numeric" => ":attribute 必须大于 :min.",
		"file"    => ":attribute 必须大于 :min kb.",
		"string"  => ":attribute 必须大于 :min 个字符.",
	),
	"not_in"         => "The selected :attribute is invalid.",
	"numeric"        => ":attribute 必须是数字",
	"required"       => ":attribute 必须输入",
	"same"           => "The :attribute and :other must match.",
	"size"           => array(
		"numeric" => "The :attribute must be :size.",
		"file"    => "The :attribute must be :size kilobyte.",
		"string"  => "The :attribute must be :size characters.",
	),
	"unique"         => ":attribute 已经存在",
	"url"            => "The :attribute format is invalid.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute_rule" to name the lines. This helps keep your
	| custom validation clean and tidy.
	|
	| So, say you want to use a custom validation message when validating that
	| the "email" attribute is unique. Just add "email_unique" to this array
	| with your custom message. The Validator will handle the rest!
	|
	*/

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as "E-Mail Address" instead
	| of "email". Your users will thank you.
	|
	| The Validator class will automatically search this array of lines it
	| is attempting to replace the :attribute place-holder in messages.
	| It's pretty slick. We think you'll like it.
	|
	*/

	'attributes' => array(
        'email' => '邮箱',
        'username' => '用户名',
        'password' => '密码',
        'password_confirmation' => '确认密码',
        'fullname' => '姓名',
    ),

);
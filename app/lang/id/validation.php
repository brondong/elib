<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"             => "Input :attribute harus diterima.",
	"active_url"           => "Input :attribute bukan URL yang valid.",
	"after"                => "Input :attribute harus tanggal setelah :date.",
	"alpha"                => "Input :attribute harus berupa huruf.",
	"alpha_dash"           => "Input :attribute harus berupa huruf, nomor, dan strip.",
	"alpha_num"            => "Input :attribute harus berupa huruf dan nomor.",
	"array"                => "Input :attribute harus berupa array.",
	"before"               => "Input :attribute harus tanggal sebelum :date.",
	"between"              => array(
		"numeric" => "Input :attribute harus diantara :min dan :max.",
		"file"    => "Input :attribute harus diantara :min dan :max kilobytes.",
		"string"  => "Input :attribute harus diantara :min dan :max karakter.",
		"array"   => "Input :attribute harus memiliki antara :min dan :max items.",
	),
	"confirmed"            => "Input konfirmasi :attribute tidak cocok.",
	"date"                 => "Input :attribute bukan tanggal yang valid.",
	"date_format"          => "Input :attribute tidak cocok dengan format :format.",
	"different"            => "Input :attribute dan :other harus berbeda.",
	"digits"               => "Input :attribute harus :digits digits.",
	"digits_between"       => "Input :attribute harus diantara :min dan :max digits.",
	"email"                => "Input :attribute bukan alamat email yang valid.",
	"exists"               => ":attribute yang dipilih tidak valid.",
	"image"                => "Input :attribute harus berupa gambar.",
	"in"                   => ":attribute yang dipilih tidak valid.",
	"integer"              => "Input :attribute harus berupa integer.",
	"ip"                   => "Input :attribute harus berupa alamat IP yang valid.",
	"max"                  => array(
		"numeric" => "Input :attribute harus tidak lebih besar dari :max.",
		"file"    => "Input :attribute harus tidak lebih besar dari :max kilobytes.",
		"string"  => "Input :attribute harus tidak lebih banyak dari :max karakter.",
		"array"   => "Input :attribute harus tidak lebih banyak dari :max items.",
	),
	"mimes"                => "Input :attribute harus berupa file bertipe: :values.",
	"min"                  => array(
		"numeric" => "Input :attribute minimal harus :min.",
		"file"    => "Input :attribute minimal harus :min kilobytes.",
		"string"  => "Input :attribute minimal harus :min karakter.",
		"array"   => "Input :attribute minimal harus memiliki :min items.",
	),
	"not_in"               => ":attribute yang dipilih tidak valid.",
	"numeric"              => "Input :attribute harus berupa nomor.",
	"regex"                => "Input :attribute format is invalid.",
	"required"             => "Input :attribute harus diisi.",
	"required_if"          => "Input :attribute harus diisi jika :other bernilai :value.",
	"required_with"        => "Input :attribute harus diisi jika :values diisi.",
	"required_with_all"    => "Input :attribute harus diisi jika :values diisi.",
	"required_without"     => "Input :attribute harus diisi jika :values tidak diisi.",
	"required_without_all" => "Input :attribute harus diisi jika tidak ada :values yang diisi.",
	"same"                 => "Input :attribute dan :other harus sama.",
	"size"                 => array(
		"numeric" => "Input :attribute harus sebesar :size.",
		"file"    => "Input :attribute harus sebesar :size kilobytes.",
		"string"  => "Input :attribute harus sebanyak :size karakter.",
		"array"   => "Input :attribute harus berisi :size items.",
	),
	"unique"               => "Input :attribute sudah ada.",
	"url"                  => "Format input :attribute tidak valid.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(
		'attribute-name' => array(
			'rule-name' => 'custom-message',
		),
	),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);

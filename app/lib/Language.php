<?php
namespace PHPMVC\LIB;

class Language
{
    private $dictionary = [];

    public function load($path)
    {
        $defaultLanguage = APP_DEFAULT_LANGUAGE;

        if(isset($_SESSION['lang'])) {
            $defaultLanguage = $_SESSION['lang'];
        }

        $folders = str_replace('|', DS , $path);
        $languageFile = LANGUAGES_PATH . $defaultLanguage . DS . $folders . '.lang.php';

        if(file_exists($languageFile)) {
            require($languageFile);

            if(is_array($_Lang) && !empty($_Lang)) {
                foreach ($_Lang as $textLabel => $textValue) {
                    $this->dictionary[$textLabel] = $textValue;
                }
            } 

        } else {
            trigger_error('Sorry the language file ' . $path . ' doens\'t exists', E_USER_WARNING);
        }
    }

    public function get($key)
    {
        if(array_key_exists($key, $this->dictionary)) {
            return $this->dictionary[$key];
        }
    }

    public function feedKey ($key, $data)
    {
        if(array_key_exists($key, $this->dictionary)) {
            array_unshift($data, $this->dictionary[$key]);
            return call_user_func_array('sprintf', $data); 
        }
    }

    public function getDictionary()
    {
        return $this->dictionary;
    }

}
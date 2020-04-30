<?php

    class Mascara{
        public function __construct($val, $mask) {
            //////// VARIAVEIS DE INSTANCIA - CREDENCIAIS
            $this->val = $val;
            $this->mask = $mask;
        }

        public function doMask(){
            $mask = $this->mask;
            $val = $this->val;

            $maskared = '';
            $k = 0;
            for($i = 0; $i<=strlen($mask)-1; $i++) {
                if(isset($val[$k])) {
                    if($mask[$i] == '#') {
                        if(isset($val[$k]))
                            $maskared .= $val[$k++];
                    } else {
                        if(isset($mask[$i]))
                        $maskared .= $mask[$i];
                    }
                }
            }
            return $maskared;
        }

    }

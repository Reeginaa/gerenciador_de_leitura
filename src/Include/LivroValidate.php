<?php
  class LivroValidade {
    public static function testarAno($paramAno) {
      if (is_numerci($paramAno)) {
        return true;
      }
      else {
        return false;
      }
    }
  }
?>

<?php 
    namespace Fajri\Model{
        class KataModel{
            private int $id;
            private string $grup;
            private string $kata;
            public function setAll(string $grup, string $kata){
                $this->grup = $grup;
                $this->kata = $kata;
            }
            public function setId(int $id){
                $this->id = $id;
            }
            public function getId(){
                return $this->id;
            }
            public function getGrup(){
                return $this->grup;
            }
            public function getKata(){
                return $this->kata;
            }
        }
    }
?>
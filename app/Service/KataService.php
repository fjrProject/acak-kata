<?php 
    namespace Fajri\Service{

    use Fajri\Config\Database;
    use Fajri\Model\KataModel;
    use Fajri\Repository\KataRepository;

        interface KataServiceInterface{
            public function showGrup() : ?array;
            public function showKata(string $grup) : ?array;
            public function addKata(string $grup, string $kata) : array;
            public function deleteKata(KataModel $model) : void;
            public function deleteGrup(string $grup) : void;
        }
        class KataService implements KataServiceInterface{
            private KataRepository $repo;
            public function __construct(){
                $db = Database::getConnection();
                $this->repo = new KataRepository($db);
            }
            public function showGrup() : ?array{
                $result = $this->repo->findGrup();
                if($result) return $result;
                return null;
            }
            public function showKata(string $grup) : ?array{
                $result = $this->repo->findKata($grup);
                if($result) return $result;
                return null;
            }
            public function addKata(string $grup, string $kata) : array{
                $array = explode(", ", $kata);
                foreach($array as $row){
                    $model = new KataModel;
                    $model->setAll($grup, $row);
                    $this->repo->addKata($model);
                }
                $show = self::showKata($grup);
                return $show;
            }
            public function deleteKata(KataModel $model) : void{
                $this->repo->removeKata($model);
            }
            public function deleteGrup(string $grup) : void{
                $cek = self::showKata($grup);
                if($cek) $this->repo->removeGrup($grup);
            }
        }
    }
?>
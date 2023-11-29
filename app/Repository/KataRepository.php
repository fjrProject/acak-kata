<?php 
    namespace Fajri\Repository{

    use Fajri\Config\Database;
    use Fajri\Model\KataModel;
    use PDO;

        interface KataRepositoryInterface{
            public function addKata(KataModel $model) : void;
            public function findGrup() : ?array;
            public function findKata(string $grup) : ?array;
            public function removeKata(KataModel $model) : void;
            public function removeGrup(string $grup) : void;
        }
        class KataRepository implements KataRepositoryInterface{
            public function __construct(private PDO $db){
                $this->db = Database::getConnection();
            }
            public function addKata(KataModel $model) : void {
                $query = $this->db->prepare("INSERT INTO kata (grup, kata) VALUES (?, ?)");
                $query->execute([
                    $model->getGrup(),
                    $model->getKata() 
                ]);
            }
            public function findGrup() : ?array{
                $result = $this->db->query("SELECT distinct grup FROM kata ORDER BY id DESC");
                if($grup = $result->fetchAll()){
                    return $grup; 
                }
                return null;
            }
            public function findKata($grup) : ?array{
                $result = $this->db->prepare("SELECT * FROM kata WHERE grup = ?");
                $result->execute([$grup]);
                if($row = $result->fetchAll()){
                    return $row;
                }
                return null;
            }
            public function removeKata(KataModel $model) : void{
                $query = $this->db->prepare("DELETE FROM kata WHERE grup = ? AND kata = ?");
                $query->execute([$model->getGrup(), $model->getKata()]);
            }
            public function removeGrup(string $grup) : void{
                $query = $this->db->prepare("DELETE FROM kata WHERE grup = ?");
                $query->execute([$grup]);
            }
        }
    }
?>
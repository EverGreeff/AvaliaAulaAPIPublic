<?php

namespace App\DAO;

use App\Models\EmojiModel;
use Slim\Http\Response;

class EmojiDAO extends Conexao {

	public function __construct() {
        parent::__construct();
    }

    

    public function getEmojis(): array {
        $sql = "SELECT * from emoji";

        $emojis = $this->pdo
            ->query($sql)
        ->fetchAll(\PDO::FETCH_ASSOC);

        return $emojis;

    }

    public function getEmoji($id): array {
        $sql = "SELECT * FROM emoji WHERE id =  '" . $id . "'";

        $disciplinas = $this->pdo
            ->query($sql)
        ->fetchAll(\PDO::FETCH_ASSOC);

        return $disciplinas;

    }

    
    
}

?>
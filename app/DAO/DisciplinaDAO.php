<?php

namespace App\DAO;

use App\Models\AvaliacaoModel;
use Slim\Http\Response;

class DisciplinaDAO extends Conexao {

	public function __construct() {
        parent::__construct();
    }
/*
    public function insertAvaliacao(AvaliacaoModel $model): void
    {
        $statement = $this->pdo
            ->prepare('INSERT INTO avaliacoes
            (
                id,
                id_disciplina,
                id_emoji,
                observacao,
                data_hora,
                excluido
            )
            VALUES
            (
                :id,
                :id_disciplina,
                :id_emoji,
                :observacao,
                :data_hora,
                :excluido
            )
            ');
        

        $statement->execute([
            'id' => $model->getId(),
            'id_disciplina' => $model->getId_disciplina(),
            'id_emoji' => $model->getId_emoji(),
            'observacao' => $model->getObservacao(),
            'data_hora' => $model->getData_hora(),
            'excluido' => $model->getExcluido()
        ]);
*/
    

    public function getDisciplinas($email): array {
        $sql = "SELECT d.* FROM disciplinas_usuario du LEFT JOIN disciplinas d ON du.disciplinas_id = d.id LEFT JOIN usuario u ON du.usuario_id = u.id WHERE u.email =  '" . $email . "'";

        $disciplinas = $this->pdo
            ->query($sql)
        ->fetchAll(\PDO::FETCH_ASSOC);

        return $disciplinas;

    }

    public function getDisciplina($id): array {
        $sql = "SELECT * FROM disciplinas WHERE id =  '" . $id . "'";

        $disciplinas = $this->pdo
            ->query($sql)
        ->fetchAll(\PDO::FETCH_ASSOC);

        return $disciplinas;

    }

    
    
}

?>
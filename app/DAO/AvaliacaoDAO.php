<?php

namespace App\DAO;

use App\Models\AvaliacaoModel;
use Slim\Http\Response;

class AvaliacaoDAO extends Conexao {

	public function __construct() {
        parent::__construct();
    }

    public function insertAvaliacao(AvaliacaoModel $model): void
    {
        $statement = $this->pdo
            ->prepare('INSERT INTO avaliacoes
            (
                id,
                id_disciplina,
                id_emoji,
                id_usuario,
                observacao,
                data_hora,
                excluido
            )
            VALUES
            (
                :id,
                :id_disciplina,
                :id_emoji,
                :id_usuario,
                :observacao,
                :data_hora,
                :excluido
            )
            ');
        

        $statement->execute([
            'id' => $model->getId(),
            'id_disciplina' => $model->getId_disciplina(),
            'id_emoji' => $model->getId_emoji(),
            'id_usuario' => $model->getId_usuario(),
            'observacao' => $model->getObservacao(),
            'data_hora' => $model->getData_hora(),
            'excluido' => $model->getExcluido()
        ]);

    }

    public function updateAvaliacao(AvaliacaoModel $model): void
    {
        $statement = $this->pdo
            ->prepare('UPDATE avaliacoes SET id_emoji = :id_emoji, observacao = :observacao, data_hora = :data_hora WHERE id = :id');
        

        $statement->execute([
            'id' => $model->getId(),
            'id_emoji' => $model->getId_emoji(),
            'observacao' => $model->getObservacao(),
            'data_hora' => $model->getData_hora()
        ]);

    }

    public function getAvaliacao($id): array {
        $sql = "SELECT * FROM avaliacoes WHERE id = " . $id;

        $avaliacao = $this->pdo
            ->query($sql)
        ->fetchAll(\PDO::FETCH_ASSOC);

        return $avaliacao;

    }

    public function getAvaliacoes($email): array {
        $sql = "SELECT *, d.nome_disciplina FROM avaliacoes a LEFT JOIN usuario u ON a.id_usuario = u.id 
        left join disciplinas d on a.id_disciplina = d.id WHERE u.email =  '" . $email . "' ORDER BY a.data_hora DESC ";

        $disciplinas = $this->pdo
            ->query($sql)
        ->fetchAll(\PDO::FETCH_ASSOC);

        return $disciplinas;

    }

    public function getAvaliacoesPorDisciplina($disciplina): array {
        $sql = "SELECT * FROM avaliacoes a WHERE a.id_disciplina = '" . $disciplina . "' ORDER BY a.data_hora DESC ";

        $disciplinas = $this->pdo
            ->query($sql)
        ->fetchAll(\PDO::FETCH_ASSOC);

        return $disciplinas;

    }

    
    
}

?>
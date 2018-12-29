<?php

namespace Model;

use \Entity\Characters;


class CharactersManagerPDO extends CharactersManager{

	public function getText($id){

		$request = $this->dao->prepare('SELECT id, name, type, damages, life FROM characters WHERE id = :id');

		$request->bindValue(':id', (int) $id, \PDO::PARAM_INT);
		$request->execute();

		$request->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Entity\Characters');
    
    	$textCharacters = $requete->fetch();
  
     	return $textCharacters;
	}

	protected function add(Characters $characters){

		$request = $this->dao->prepare('INSERT INTO characters SET name = :name, type = :type, damages = :damages, life = :life');

		$request->bindValue(':name', $characters->name());
		$request->bindValue(':type', $characters->type());
		$request->bindValue(':damages', (int) $characters->damages(), \PDO::PARAM_INT);
		$request->bindValue(':life', (int) $characters->life(), \PDO::PARAM_INT);

		$request->execute();
	}

    protected function modify(Characters $characters){

		$request = $this->dao->prepare('UPDATE characters SET name = :name, type = :type, damages = :damages, life = :life WHERE id = :id');

		$request->bindValue(':name', $characters->name());
		$request->bindValue(':type', $characters->type());
		$request->bindValue(':damages', (int) $characters->damages(), \PDO::PARAM_INT);
		$request->bindValue(':life', (int) $characters->life(), \PDO::PARAM_INT);
		$request->bindValue(':id', $characters->id(), \PDO::PARAM_INT);

		$request->execute();
	}

	public function getAllElements(){

		$request = $this->dao->query('SELECT id, name, damages, life, type FROM characters');

		$listElements = $request->fetchAll();

		return $listElements;
	}

	public function delete($id){

		$request = $this->dao->prepare('DELETE FROM characters WHERE id = :id');
		$request->bindValue(':id', (int) $id, \PDO::PARAM_INT);

		$request->execute();
	}
}
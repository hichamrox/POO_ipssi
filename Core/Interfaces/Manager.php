<?php
namespace Core\Interfaces;

interface Manager extends Manager3, Manager4{

    /**
     * retourne tous les éléments d'une table
     *
     * @return void
     */
    public function getAll();

    /**
     * Retourne un élément d'une table en fonction de son id
     *
     * @param integer $id
     * @return void
     */
    public function get(int $id);

    /**
     * Ajoute un élément à la BDD
     *
     * @return void
     */
    public function save();

    /**
     * Met à jour un élément de la BDD
     *
     * @param integer $id
     * @return void
     */
    public function update(int $id);

    /**
     * Supprime un élément de la BDD
     *
     * @param integer $id
     * @return void
     */
    public function delete(int $id);

    public function obligatoire();
}
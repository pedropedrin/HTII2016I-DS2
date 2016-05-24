<?php 
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
  * @ORM\Entity 
  * @ORM\Table(name="generos")
  **/
class Genero
{
	/**
	  * @ORM\Id 
	  * @ORM\Column(type="integer")
	  * @ORM\GeneratecValue(strategy="AUTO")
	**/
	protected $id;
	
	/**
	  * @ORM\Column(type="string")
	**/
	protected $descricao;
	
	/**
	 * @ORM\ManyToMany(targetEntity="Genero", inversedBy="Livro", mappedBy="generos")
	**/
	
	protected $livros;
}
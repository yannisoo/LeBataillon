<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $role;

    /**
     * @ORM\Column(type="integer", length=255, nullable=true)
     */
    private $roles = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserName(): ?string
    {
        return $this->username;
    }

    public function setUserName(?string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): self
    {
        $this->role = $role;

        return $this;
    }


    public function eraseCredentials(){}


      public function getSalt() {}

        public function getRoles() {

      //   if ($roles == 0){
      //     return ['ROLE_ADMIN'];
      //   }
      //   if ($roles == 1){
      //    return ['ROLE_COUNT'];
      //  }
      //  if ($roles == 2){
      //   return ['ROLE_CDP'];
      // }
      // else{
      //   return ['ROLE_USER'];
      // }

       $roles = $this->roles;
       // guarantee every user at least has ROLE_USER
       $roles[] = 'ROLE_USER';

        }


        public function setRoles(?int $roles): self
        {
            $this->roles = $roles;

            return $this;
        }



}

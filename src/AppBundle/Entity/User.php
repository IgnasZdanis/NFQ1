<?php
/**
 * Created by PhpStorm.
 * User: ignas
 * Date: 17.10.13
 * Time: 12.55
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="`user`")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    public function getGravatar() {
        $email = $this->email;
        $email = trim($email);
        $email = strtolower($email);
        return "https://www.gravatar.com/avatar/" . md5( $email );
    # ...
    }
}

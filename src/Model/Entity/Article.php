<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Inflector;

/**
 * Article Entity.
 *
 * @property int $id
 * @property string $title
 * @property string $url
 * @property string $content
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $updated
 */
class Article extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];

    protected function _setTitle($title)
    {
        if (!$this->properties['url']) {
            $this->set('url', Inflector::slug($title));
        }
        return $title;
    }

    protected function _getUrl($url)
    {
        return Inflector::slug($url);
    }
}

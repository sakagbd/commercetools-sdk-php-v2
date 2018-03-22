<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Request;

use Commercetools\Client\Resource;
use Commercetools\Types\Category\CategoryUpdate;



class Resource2 extends Resource
{
    /**
     * @return ByProjectKeyCategoriesKeyByKeyGet
     */
    public function get(): ByProjectKeyCategoriesKeyByKeyGet {
        $args = $this->getArgs();
        return new ByProjectKeyCategoriesKeyByKeyGet($args['projectKey'], $args['key']);
    }
    /**
     * @param CategoryUpdate $body
     * @return ByProjectKeyCategoriesKeyByKeyPost
     */
    public function post(CategoryUpdate $body): ByProjectKeyCategoriesKeyByKeyPost {
        $args = $this->getArgs();
        return new ByProjectKeyCategoriesKeyByKeyPost($args['projectKey'], $args['key'], $body);
    }
    /**
     * @return ByProjectKeyCategoriesKeyByKeyDelete
     */
    public function delete(): ByProjectKeyCategoriesKeyByKeyDelete {
        $args = $this->getArgs();
        return new ByProjectKeyCategoriesKeyByKeyDelete($args['projectKey'], $args['key']);
    }

}

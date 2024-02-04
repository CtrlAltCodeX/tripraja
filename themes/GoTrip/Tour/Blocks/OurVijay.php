<?php
namespace Themes\GoTrip\Tour\Blocks;

use Modules\Media\Helpers\FileHelper;
use Modules\Template\Blocks\BaseBlock;

class OurVijay extends BaseBlock
{
    public function getOptions(){
        return [
            'settings' => [
                [
                    'id'        => 'title',
                    'type'      => 'input',
                    'inputType' => 'text',
                    'label'     => __('Title')
                ],
                [
                    'id'        => 'link_title',
                    'type'      => 'input',
                    'inputType' => 'text',
                    'label'     => __('Term Link')
                ],
                [
                    'id'        => 'desc',
                    'type'      => 'input',
                    'inputType' => 'text',
                    'label'     => __('Coupan Code')
                ],
                
            ],
            'category'=>__("Other Block")
        ];
    }

    public function getName()
    {
        return __('Coupon Promo');
    }

    public function content($model = [])
    {
        // if (empty($model['style'])) {
        //     $model['style'] = 'style_1';
        // }
        return view('Template::frontend.blocks.text-vijay.index', $model);
    }
}

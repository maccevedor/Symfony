<?php
namespace DMW\DemoBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
class ArticleType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('title')
                ->add('author')
                ->add('created');
    }
    public function getName()
    {
        return 'article_form';
    }
}
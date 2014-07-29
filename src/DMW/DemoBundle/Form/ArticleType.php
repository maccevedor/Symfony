<?php
namespace DMW\DemoBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface; 
class ArticleType extends AbstractType
{
public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title')
                ->add('author')
                ->add('created')
                ->add('updated')
                ->add('slug')
                ->add('category')
                ->add('content')
                ->add('tags');
    }
    public function getName()
    {
        return 'article_form';
    }
}
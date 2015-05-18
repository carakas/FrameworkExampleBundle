<?php

namespace SumoCoders\FrameworkExampleBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class LabelsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->addLabelsSection($builder, $options);
    }

    private function addLabelsSection($builder, array $options)
    {
        $builder
            ->add(
                'label_example_with_help_block_1',
                'text',
                array(
                    'label' => "Block Label name",
                    'help_block' => 'Block help text, can inlude <strong>HTML formatting</strong>',
                    'attr' => array(
                        'placeholder' => "Some text",
                    )
                )
            )
            ->add(
                'label_example_with_help_label',
                'text',
                array(
                    'label' => "Label help",
                    'help_label' => 'Label help text',
                    'attr' => array(
                        'placeholder' => "Some text",
                    )
                )
            )
            ->add(
                'label_example_with_tooltip',
                'text',
                array(
                    'required' => false,
                    'label' => "Label tooltip help",
                    'help_label_tooltip' => array(
                        'title' => 'Label tooltip text',
                    ),
                    'attr' => array(
                        'placeholder' => "Some text",
                    )
                )
            )
            ->add(
                'label_example_with_tooltip_without_icon',
                'text',
                array(
                    'label' => "Label tooltip help",
                    'help_label_tooltip' => array(
                        'title' => 'Label tooltip text',
                        'text' => 'read more',
                        'icon' => false,
                    ),
                    'attr' => array(
                        'placeholder' => "Some text",
                    )
                )
            )
            ->add(
                'label_example_with_popover',
                'text',
                array(
                    'label' => "Label popover help",
                    'help_label_popover' => array(
                        'title' => 'Label popover title',
                        'content' => 'Content for popover help, can include <strong>HTML</strong>'
                    ),
                    'attr' => array(
                        'placeholder' => "Some text",
                    )
                )
            )
            ->add(
                'label_example_with_popover_and_options',
                'text',
                array(
                    'label' => "Label popover help right aligned, different icon",
                    'help_label_popover' => array(
                        'title' => 'Label popover title to the right',
                        'placement' => 'right',
                        'icon' => 'question',
                        'content' => 'Content for popover help, can include <strong>HTML</strong>'
                    ),
                    'attr' => array(
                        'placeholder' => "Some text",
                    )
                )
            );
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'labels';
    }
}
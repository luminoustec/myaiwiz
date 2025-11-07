<?php

namespace Xoomcoders\Xaito\Widgets;


class Faq extends \Elementor\Widget_Base
{
	public function get_name()
	{
		return 'xaito-faq';
	}

	public function get_title()
	{
		return __('FAQ', 'xaito-addon');
	}

	public function get_icon()
	{
		return 'eicon-cogs';
	}

	public function get_categories()
	{
		return ['xaito-category'];
	}

	protected function register_controls()
	{


		$this->start_controls_section(
			'layout_section',
			[
				'label' => __('Layout', 'xaito-addon'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'layout_type',
			[
				'label' => __('Select Layout', 'xaito-addon'),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'default' => 'layout_one',
				'options' => [
					'layout_one' => __('Layout One', 'xaito-addon'),
					'layout_two' => __('Layout Two', 'xaito-addon'),
					'layout_three' => __('Layout Two', 'xaito-addon'),
				]
			]
		);


		$this->end_controls_section();

		include  xaito_get_elementor_option('faq-option.php');

		//style
		$this->start_controls_section(
			'font_style',
			[
				'label' => esc_html__('Font Typos', 'xaito-addon'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'layout_type' => ['layout']
				]
			]
		);

		xaito_elementor_general_style_options($this, 'Form Title', '{{WRAPPER}} .faq-page__email-title', ['layout_one']);

		xaito_elementor_general_style_options($this, 'Faq Question', '{{WRAPPER}} .faq-one-accrodion .accrodion .accrodion-title h4', ['layout_one']);
		xaito_elementor_general_style_options($this, 'Faq Answer', '{{WRAPPER}} .faq-one-accrodion .accrodion-content p', ['layout_one']);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include xaito_get_template('faq-one.php');
		include xaito_get_template('faq-two.php');
		include xaito_get_template('faq-three.php');
	}
}

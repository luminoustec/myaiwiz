<?php

namespace Xoomcoders\Xaito\Widgets;


class  Banner extends \Elementor\Widget_Base
{
	public function get_name()
	{
		return 'xaito-banner';
	}

	public function get_title()
	{
		return __('Banner', 'xaito-addon');
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
					'layout_three' => __('Layout Three', 'xaito-addon'),

				]
			]
		);

		$this->end_controls_section();

		include  xaito_get_elementor_option('banner-one-option.php');
		include  xaito_get_elementor_option('banner-two-option.php');
		include  xaito_get_elementor_option('banner-three-option.php');



		//typos
		$this->start_controls_section(
			'style_options',
			[
				'label' => esc_html__('Style Options', 'xaito-addon'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => [
					'layout_type!' => 'layout'
				]
			]
		);

		xaito_elementor_general_style_options($this, 'Title', '{{WRAPPER}} .section-title__title, {{WRAPPER} .our-mission__right-title', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five']);
		xaito_elementor_general_style_options($this, 'Sub Title', '{{WRAPPER}} .section-title__tagline', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five']);
		xaito_elementor_general_style_options($this, 'Summary Text', '{{WRAPPER}} .banner-one__left-text,{{WRAPPER}} .banner-two__left-text,{{WRAPPER}} .banner-three__left-text-one,{{WRAPPER}} .join-us__text-one ,{{WRAPPER}} .mission-one__text-1', ['layout_one', 'layout_two', 'layout_three', 'layout_four', 'layout_five']);
		xaito_elementor_general_style_options($this, 'Summary Text Two', '{{WRAPPER}} .banner-three__left-text-two,{{WRAPPER}} .join-us__text-two', ['layout_three', 'layout_four']);

		xaito_elementor_button_style_options($this, 'Button', '{{WRAPPER}} .banner-two__left-btn, {{WRAPPER}} .banner-three__left-btn ,{{WRAPPER}} .join-us__right-btn', '{{WRAPPER}} .thm-btn:hover::before', ['layout_two', 'layout_three', 'layout_four']);

		// feature box
		xaito_elementor_general_style_options($this, 'Feature Box Title', '{{WRAPPER}} .banner-one__points li .content h4 ,{{WRAPPER}} .banner-two__icon-box h4,{{WRAPPER}} .banner-three__points .content h4', ['layout_one', 'layout_two', 'layout_three']);

		$this->add_control(
			'box-color',
			[
				'label' => __('Content Color', 'xaito-addon'),
				'type' =>  \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .banner-one__points li .content p, {{WRAPPER}} .banner-two__icon-box p, {{WRAPPER}} .banner-three__points .content p' => 'color: {{VALUE}};',
				],
				'condition' => [
					'layout_type' => ['layout_one', 'layout_two', 'layout_three']
				]
			]
		);
		$this->add_control(
			'box-icon-color',
			[
				'label' => __('Icon Color', 'xaito-addon'),
				'type' =>  \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .banner-one__points li .icon span, {{WRAPPER}} .banner-two__icon-box li .icon span ,{{WRAPPER}} .banner-three__points li .icon span' => 'color: {{VALUE}};',
				],
				'condition' => [
					'layout_type' => ['layout_one', 'layout_two', 'layout_three']
				]
			]
		);

		$this->add_control(
			'bottom-color',
			[
				'label' => __('Bottom Content Color', 'xaito-addon'),
				'type' =>  \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .banner-one__bottom-text' => 'color: {{VALUE}};',
				],
				'condition' => [
					'layout_type' => 'layout_one',
				]
			]
		);

		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();
		include xaito_get_template('banner-one.php');
		include xaito_get_template('banner-two.php');
		include xaito_get_template('banner-three.php');
	}
}

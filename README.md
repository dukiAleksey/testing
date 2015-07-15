# Duki Aleksey testing

## 1. User documentation

####### How to install and activate theme

1. Download theme files from this GitHub repository. Just press **Download ZIP** button.
2. Extract files to your wordpress installed folder (using FTP) to **wp-contant/themes/** directory.
3. Go to **Appearance -> Themes**. Select **Duki Aleksey - test CHILD** and press **Activate** button.

####### How to create pages

1. To create new page on your site you need to be logged in. Go to **domain.com/wp-admin/** and enter your access data.
2. Go to **Pages -> Add new**.
3. Type a heading, enter a text to the content zone, select category and tags if needed and click **Publish**.
4. Click **View Page** to check the result.

####### How to select a main page of a site

1. Go to **Apearance -> Customize**.
2. Select **Static Front Page** block.
3. If you want to display your latest post on main page select **Your latest posts**.
4. If you want to display a static page, than click **Static page** and select a page, that will be displayed as a front page. Also select a page to display blog posts if needed.

####### How to create blog posts

1. Go to **Posts -> Add new**.
2. Type a heading, enter a text to the content zone, select category and tags if needed and click **Publish**.
3. Select post categories and tags. Click **Update**.

####### How to create categories and tags

There are two ways to create categories and tags. The first one is adding categories and tags in according menu items. Go to Posts->Categories to add new category. In **Add New Cetegory** section type category name, slug and select parent if you want to make a subcategory of a parent category. The same process to creating tags, except selecting parent. Tags disallow parental relations.
The secont way to create category and tags is by adding/editing posts mode. Go to **Posts->Add new**. To create a category for post just click **+Add New Category** in Category section. To create tags - type a tag name in text field in **Tags** section and click **Add** button.


## 2. WooCommerce

*a. Каким образом можно переписывать стандартные шаблоны плагина?*
В директории шаблона создать папку woocommerce и поместить в нее файлы шаблона (сохраняя иерархию/вложенность ), которые необходимо кастомизировать. Изменить необходимые файлы. При обновлении WC файлы не обновятся. 

*b. Как в WooCommerce реализованы отзывы?*
Как стандартные комментарии WP. Отзывы привязываются к товару. (комментарии - к посту)

*c. Какие типы товаров можно использовать в WC?*
- Простой товар
- Сгруппированный товар
- Внешний товар
- Вариативный товар

*d. Можно ли изменить адреса стандартных страниц, например checkout, cart, my­account
и пр? Если да, то как?*
Да. Достаточно изменить slug страницы.


## 3. Visual composer

Опыта по кастомизации VC нет. Попробуем разобаться.
Используем документацию:
https://wpbakery.atlassian.net/wiki/pages/viewpage.action?pageId=524332

Как видно в документаци уже есть реализация неоходимого шорткода. Необходимо только заменить некоторые значения.

'''php

	add_action( 'vc_before_init', 'your_name_integrateWithVC' );
	function your_name_integrateWithVC() {
	   vc_map( array(
	      "name" => __( "AIS Test Shortcode", "my-text-domain" ),
	      "base" => "ais_test",
	      "class" => "",
	      "category" => __( "Content", "my-text-domain"),
	      'admin_enqueue_js' => array(get_template_directory_uri().'/vc_extend/bartag.js'),
	      'admin_enqueue_css' => array(get_template_directory_uri().'/vc_extend/bartag.css'),
	      "params" => array(
	         array(
	            "type" => "textfield",
	            "holder" => "div",
	            "class" => "",
	            "heading" => __( "Text", "my-text-domain" ),
	            "param_name" => "ais",
	            "value" => __( "Default param value", "my-text-domain" ),
	            "description" => __( "Description for ais param.", "my-text-domain" )
	         ),
	         array(
	            "type" => "colorpicker",
	            "class" => "",
	            "heading" => __( "Text color", "my-text-domain" ),
	            "param_name" => "color",
	            "value" => '#FF0000', //Default Red color
	            "description" => __( "Choose text color", "my-text-domain" )
	         )
	      )
	   ) );
	}

'''


## 4. Ответы на вопросы

*a. Какие требования к параметрам сервера предъявляет WordPress?*
- поддержка php
- поддержка MySQL
- дисковое пространство не менее 500mb
- лимит оперативной памяти не менее 64mb. Лучше больше.
- включенный модуль mod_rewrite
  и прочие

*b. На какую версию PHP необходимо ориентироваться при разработке?*
Версия php 5.4 (https://wordpress.org/about/requirements/)

*c. Что нужно сделать для переопределения функций в child­теме?*
Функции переопределяются в файле functions.php в дочерней теме, использовав имя этой функции. Переопределять можно не все функции родительской темы, а только те, которые обёрнуты в условие с функцией function_exists

*d. Как дать пользователю менять какие-­либо параметры темы не затрагивая ее код?*
Использовать нативный WP Customizer, предварительно создав в нем необходимые контролы для элементов сайта.

*e. Чем отличаются filters от actions в WordPress?*
Событие - вызов функции в определенное время. Возвращает false или true.
Фильтры - оперируют данными, которые после используются.

*f. Что такое hooks?*
Это созданные пользователями функции, которые привязываются к функциям WordPress. Записываются в functions.php. Filters and Actions - это hooks. Hooks позволяют расширить функционал WP не редактируя ядро. В кодексе имеется список стандартных hooks.

*g. Можно ли изменять ядро WordPress?*
Нет

*h. Назовите стандартные таблицы БД WordPress.*
wp_commentmeta
wp_comments
wp_links
wp_options
wp_postmeta
wp_posts
wp_terms
wp_term_relationships
wp_term_taxonomy
wp_usermeta
wp_users

*i. Что такое The Loop и как он работает?*
The Loop - один из стандатрных циклов WP. Перебирает массив содержащий в себе информацию о постах и во время перебора выводит информацию о каждом посте. 

*j. Что такое виджеты?*
Это функциональные блоки, которые можно размещать в сайдбарах (dynamic sidebar) используемой темы WordPress. Сущ. стандартные виджеты такие как поиск, рубрики, произвольное меню, текст, облако меток, свежие записи и т.д.

*k. Влияют ли неактивные плагины на работу WordPress?*
Нет.

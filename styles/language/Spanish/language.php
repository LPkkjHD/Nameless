<?php 
/*
 *	Made by Samerton
 *  http://worldscapemc.co.uk
 *
 *  License: MIT
 */

/*
 *  Spanish (ES-es)
 */
 
/*
 *  Admin Panel
 */
$admin_language = array(
	// General terms
	'admin_cp' => 'AdminCP', 
	'invalid_token' => 'Token no válido, inténtelo de nuevo.',
	'invalid_action' => 'Acción no válida',
	'successfully_updated' => 'Actualizado correctamente',
	'settings' => 'Configuración',
	'confirm_action' => 'Confirme acción',
	'edit' => 'Editar',
	'actions' => 'Acciones',
	'task_successful' => 'Tarea ejecutada correctamante',
	
	// Admin login
	're-authenticate' => 'Por favor, identifícate',
	
	// Admin sidebar
	'index' => 'Información general',
	'core' => 'Principal',
	'custom_pages' => 'Páginas Personalizadas',
	'general' => 'General',
	'forums' => 'Foros',
	'users_and_groups' => 'Usuarios y Grupos',
	'minecraft' => 'Minecraft',
	'style' => 'Stilo',
	'addons' => 'Complementos',
	'update' => 'Actualizar',
	'misc' => 'Misceláneo',
	
	// Admin index page
	'statistics' => 'Estadísticas',
	
	// Admin core page
	'general_settings' => 'Configuración General',
	'modules' => 'Módulos',
	'module_not_exist' => '¡El módulo no existe!',
	'module_enabled' => 'Módulo activado.',
	'module_disabled' => 'Módulo desactivado.',
	'site_name' => 'Nombre del sitio',
	'language' => 'Idioma',
	'voice_server_not_writable' => 'core/voice_server.php no es modificable. Verifique permisos',
	'email' => 'Correo',
	'incoming_email' => 'Dirección de entrada',
	'outgoing_email' => 'Dirección de salida',
	'outgoing_email_help' => 'Sólo necesario si la función de correo de PHP está activada',
	'use_php_mail' => '¿Usar la función mail() de PHP?',
	'use_php_mail_help' => 'Recomendado: activar. Si su sitio envia correos electrónicos, por favor, desactívelo y edite core/email.php con la configuración del corero.',
	'use_gmail' => '¿Usar Gmail para enviar correo?',
	'use_gmail_help' => 'Sólo disponible si la funcion de correo de PHP está desactivada. Si elije no usar Gmail, se usuará el protocolo SMTP. De todas formas, edite la configuración en core/email.php.',
	
	// Admin custom pages page
	'click_on_page_to_edit' => 'Seleccione una página para editarla.',
	'page' => 'Página:',
	'url' => 'URL:',
	'page_url' => 'URL de la página',
	'page_url_example' => '(Precedido de "/", por ejemplo /help/)',
	'page_title' => 'Título de la página',
	'page_content' => 'Contenido de la página',
	'new_page' => 'Nueva página',
	'page_successfully_created' => 'Página creada correctamente',
	'page_successfully_edited' => 'Página editada correctamente',
	'unable_to_create_page' => 'No se ha podido crear la página.',
	'unable_to_edit_page' => 'No se ha podido editar la página.',
	'create_page_error' => 'Por favor, asegúrese que ha introducido una URL entre 1 y 20 caracteres, un títlo entre 1 y 30, y el contenido de la página tener entre 5 y 20480 caracteres.',
	'delete_page' => 'Borrar página',
	'confirm_delete_page' => '¿Seguro que quiere borrar la página?',
	'page_deleted_successfully' => 'Página borrada.',
	'page_link_location' => 'Mostar página en:',
	'page_link_navbar' => 'Barra de navegación',
	'page_link_more' => 'Barra de navegación con menú "Mas"',
	'page_link_footer' => 'Pie de página',
	
	// Admin forum page
	'labels' => 'Etiquetas de tema',
	'new_label' => 'Nueva etiqueta',
	'no_labels_defined' => 'No se han definido etiquetas',
	'label_name' => 'Nombre de etiqueta',
	'label_type' => 'Tipo de etiqueta',
	'label_forums' => 'Etiqueta de Foros',
	'label_creation_error' => 'Error al crear la etiqueta. Por favor, asegúrese que no tiene más de 32 caracteres y ha especificado el tipo.',
	'confirm_label_deletion' => '¿Seguro que quiere borrar esta etiqueta?',
	'editing_label' => 'Editar etiqueta',
	'label_creation_success' => 'Etiqueta creada correctamente',
	'label_edit_success' => 'Etiqueta editada correctamente',
	'label_default' => 'Defecto',
	'label_primary' => 'Primario',
	'label_success' => 'Correcto',
	'label_info' => 'Información',
	'label_warning' => 'Aviso',
	'label_danger' => 'Peligo',
	'new_forum' => 'Nuevo foro',
	'forum_layout' => 'Características del Foro',
	'table_view' => 'Vista de tabla',
	'latest_discussions_view' => 'Ver último mentasaje',
	'create_forum' => 'Crear foro',
	'forum_name' => 'Nombre del foro',
	'forum_description' => 'Descripción del foro',
	'delete_forum' => 'Borrar foro',
	'move_topics_and_posts_to' => 'Move mensaje y respuestas a',
	'delete_topics_and_posts' => 'Borra mensaje y respuestas',
	'parent_forum' => 'Foro padre',
	'has_no_parent' => 'No tiene padre',
	'forum_permissions' => 'Permisos del foro',
	'can_view_forum' => 'No puede ver el foro:',
	'can_create_topic' => 'No crear mensaje en:',
	'can_post_reply' => 'No puede responder:',
	'display_threads_as_news' => '¿Mostrar hilos y noticias en la página principal?',
	
	// Admin Users and Groups page
	'users' => 'Usuarios',
	'new_user' => 'Nuevo usuario',
	'created' => 'Creado',
	'user_deleted' => 'usuario borrado',
	'validate_user' => 'Usuario validado',
	'update_uuid' => 'Actulaizar UUID',
	'unable_to_update_uuid' => 'No se puede actualizar UUID.',
	'update_mc_name' => 'Actualizar nombre de Minecraft',
	'reset_password' => 'Borrar Contraseña',
	'punish_user' => 'Castgar Usuario',
	'delete_user' => 'Borrar Usuario',
	'minecraft_uuid' => 'UUID de Minecraft',
	'ip_address' => 'Dirección IP',
	'ip' => 'IP:',
	'other_actions' => 'Otras acciones:',
	'disable_avatar' => 'Desactivar avatar',
	'confirm_user_deletion' => '¿Seguro que quiere borrar el usuario {x}?', // Don't replace "{x}"
	'groups' => 'Grupos',
	'group' => 'Grupo',
	'new_group' => 'Nuevo Grupo',
	'id' => 'ID',
	'name' => 'Nombre',
	'create_group' => 'Crear Grupo',
	'group_name' => 'Nombre del grupo',
	'group_html' => 'HTML del Grupo',
	'group_html_lg' => 'HTML extendido del Grupo',
	'donor_group_id' => 'ID Paquete de compra',
	'donor_group_id_help' => '<p>Este es el ID del paquete en Buycraft, MinecraftMarket or MCStock.</p><p>Puede estar vacio.</p>',
	'donor_group_instructions' => 	'<p>Los grupos de paquetes deben ser creados en orden inverso, <strong>de menor vaolr a mayor valor</strong>.</p>
									<p>Por ejemplo. Un paquete de 10€ debe ser creado antes que uno de 20€.</p>',
	'delete_group' => 'Borrar grupo',
	'confirm_group_deletion' => 'Seguro que desea borar el grupo {x}?', // Don't replace "{x}"
	'group_staff' => '¿Es un grupo de administración?',
	'group_modcp' => '¿Puede el grupo ver ModCP?',
	'group_admincp' => '¿Puede el grupo ver AdminCP?',
	
	// Admin Minecraft page
	'minecraft_settings' => 'Configuración de Minecraft',
	'use_plugin' => '¿Usar el plugin Nameless de Minecraft?',
	'force_avatars' => '¿Forzar las imagenes Minecraft?',
	'uuid_linking' => '¿Activar enlaces al UUID?',
	'use_plugin_help' => 'utilizando el módulo permite sincronizar el nivel, registarse en el juego y generar incidencias.',
	'uuid_linking_help' => 'Si se deshabilita la cuenta del usuario no se enlazará con en UUID. Es muy recomendable que esté activado.',
	'plugin_settings' => 'Configuración de Plugins',
	'confirm_api_regen' => '¿Quiere generar una nueva cadena para la API?',
	'servers' => 'Servidores',
	'new_server' => 'Nuevo Servidor',
	'confirm_server_deletion' => '¿Seguro que quiere eleminar este servidor?',
	'main_server' => 'Servidor Principal',
	'main_server_help' => 'El servidor al que se conectan los jugadores. Por lo general, se trata de la instancia BungeeCord.',
	'choose_a_main_server' => 'Elegir servidor principal..',
	'external_query' => '¿Usar consulta externa?',
	'external_query_help' => '¿Utilice una API externa para consultar el servidor de Minecraft? Sólo utilice esto si la consulta interna no funciona. Es muy recomendable que no esté activada.',
	'editing_server' => 'Editar servidor {x}', // Don't replace "{x}"
	'server_ip_with_port' => 'Dirección IP (con puerto)',
	'show_on_play_page' => '¿Mostar en la página de Juegos?',
	'pre_17' => 'Anterior a la versón 1.7 de Minecraft?',
	'server_name' => 'Nombre del servidor',
	'invalid_server_id' => 'ID del servidor errónea',
	'show_players' => '¿Mostar la lista de jugadore en página de Juegos?',
	'server_edited' => 'Servidor editado correctamente',
	'server_created' => 'Servidor creado correctamente',
	'query_errors' => 'Error de peticiones',
	'query_errors_info' => 'Los siguientes errores le ayudarán de diagnosticar la versión interna de la consulta al servidor.',
	'no_query_errors' => 'No hay registro de errores',
	'date' => 'Fecha:',
	'port' => 'Puerto:',
	'viewing_error' => 'Ver Error',
	'confirm_error_deletion' => '¿Seguro que quiere eliminar este error?',
	
	// Admin Themes, Templates and Addons
	'themes' => 'Temas',
	'templates' => 'Plantillas',
	'installed_themes' => 'Temas instalados',
	'installed_templates' => 'Plantillas instaladas',
	'installed_addons' => 'Añaidos Instalados',
	'install_theme' => 'Instalar tema',
	'install_template' => 'Instalar plantilla',
	'install_addon' => 'Instalar añadido',
	'install_a_theme' => 'Instalar un tema',
	'install_a_template' => 'Instalar una plantilla',
	'install_an_addon' => 'Instalar un añadido',
	'active' => 'Activo',
	'activate' => 'Activado',
	'deactivate' => 'Desactivado',
	'theme_install_instructions' => 'Por favor, suba los temas en el directorio <strong>styles/themes</strong>. Luego presione el botón de "Buscar".',
	'template_install_instructions' => 'Por favor, suba las plantilas en el directorio <strong>styles/templates</strong>. Luego presione el botón de "Buscar".',
	'addon_install_instructions' => 'Por favor, suba los añadidos en el directorio <strong>addons</strong>. Luego presione el botón de "Buscar".',
	'addon_install_warning' => 'Los añadidos se instalar por su cuenta y riesgo. Haga una copia de seguridad antes de proceder',
	'scan' => 'Buscar',
	'theme_not_exist' => '¡El tema no existe!',
	'template_not_exist' => '¡La plantalla no existe!',
	'addon_not_exist' => '¡El añadido no existe!',
	'style_scan_complete' => 'Finalizado. Los nuevos estilos se han instalado.',
	'addon_scan_complete' => 'Finalizado, todos los añadidos se han instalado.',
	'theme_enabled' => 'Tema actviado.',
	'template_enabled' => 'Plantilla activada.',
	'addon_enabled' => 'Añadido activado.',
	'theme_deleted' => 'Tema borrado.',
	'template_deleted' => 'Plantilla borrada.',
	'addon_disabled' => 'Añadido desactivado.',
	'inverse_navbar' => 'Barra de navegación inversa',
	'confirm_theme_deletion' => '¿Seguro que desea borrar el tema <strong>{x}</strong>?<br /><br />El tema se eliminará de su directorio <strong>styles/themes</strong>.', // Don't replace {x}
	'confirm_template_deletion' => '¿Seguro que desea borrar la plantilla <strong>{x}</strong>?<br /><br />La plantilla se eliminará de su directorio <strong>styles/templates</strong>.', // Don't replace {x}
	
	// Admin Misc page
	'other_settings' => 'Otra configuración',
	'enable_error_reporting' => '¿Activar reporte de errores?',
	'error_reporting_description' => 'Esto sólo debe ser usado para depuración, Es muy recomendable que esté desactivado.',
	'display_page_load_time' => '¿Mostar el tiempo de carga de la página?',
	'page_load_time_description' => 'Activándolo mostrará el medidor de velocidad a pié de página indicando el tiempo en cargar.',
	'reset_website' => 'Reiniciar sitio',
	'reset_website_info' => 'Se reiniciará su sitio Web y se eliminará su configuración. <strong>Los añadidos serán desactivados pero no eliminados. Su configuración permanecerá sin cambios.</strong> Sus servidores de Minecraft se conservarán.',
	'confirm_reset_website' => '¿Seguro que queire reiniciar la configuración del sitio web?'
);

/*
 *  Navbar
 */
$navbar_language = array(
	'home' => 'Principal',
	'play' => 'Juegos',
	'forum' => 'Foro',
	'vote' => 'Votar',
	'donate' => 'Donar',
	'more' => 'Mas',
	'staff_apps' => 'Administración'
);

/*
 * User Related
 */
$user_language = array(
	// Registration
	'authme_password' => 'AuthMe contraseña',
	'create_an_account' => 'Crear una cuenta',
	'username' => 'Usuario',
	'minecraft_username' => 'usuario de Minecraft',
	'email' => 'Correo',
	'email_address' => 'Dirección de correo',
	'password' => 'Contraseña',
	'confirm_password' => 'Confirnar la contraseña',
	'i_agree' => 'Acepto',
	'agree_t_and_c' => 'Seleccionando el <strong class="label label-primary">Registro</strong>, acepta nuestros <a href="#" data-toggle="modal" data-target="#t_and_c_m">Términos y condiciones</a>.',
	'register' => 'Registro',
	'sign_in' => 'Acceder',
	'sign_out' => 'Salir',
	'terms_and_conditions' => 'Terminos y condiciones',
	'successful_signin' => 'Se ha registrado correctamente',
	'incorrect_details' => 'Detalles erróneos',
	'remember_me' => 'Recuérdame',
	'forgot_password' => 'Contraseña olvidada',
	'must_input_username' => 'Debe poner un usuario.',
	'must_input_password' => 'Debe poner una contraseña.',
	'inactive_account' => 'La cuenta está inactiva. ¿Ha pedido un reincio de contraseña?',
	'account_banned' => 'Su cuenta ha sido inhabilitada.',
	'successfully_logged_out' => 'Ha salido correctamente.',
	'signature' => 'Firma',
	'registration_check_email' => 'Por favor, verifique que ha recibido en el correo un enlace para poder validarse. No podrá acceder hasta que lo pulse.',
	'unknown_login_error' => 'Lo sentimos, ha sucedido un error inesperado al intentar acceder. Inténtelo mas tarde.',
	'validation_complete' => '¡Gracias por registrarse! Ya puede acceder.',
	'validation_error' => 'No hemos podido procesar su petición. Por favor, pulse el enlace de nuevo.',
	'registration_error' => 'Por favor, asegúrese que ha rellenado todos los campos y el usuario tiene entre 3 y 20 caracteres y su contraseña tiene entre 3 y 30.',
	
	// UserCP
	'user_cp' => 'Panel Usuario',
	'no_file_chosen' => 'No se ha selecionado archivo',
	'private_messages' => 'Mensaje privado',
	'profile_settings' => 'Configuración del perfil',
	'your_profile' => 'Su perfil',
	'topics' => 'Temas',
	'posts' => 'Mensaje',
	'reputation' => 'Reputación',
	'friends' => 'Amigos',
	'alerts' => 'Alertas',
	
	// Messaging
	'new_message' => 'Nuevo mensaje',
	'no_messages' => 'Sin mensajes',
	'and_x_more' => 'y {x} mas', // Don't replace "{x}"
	'system' => 'Sistema',
	'message_title' => 'Título del mensaje',
	'message' => 'Mensaje',
	'to' => 'Para:',
	'separate_users_with_comma' => 'Separe los usuarios con una coma (",")',
	'viewing_message' => 'Ver mensaje',
	'delete_message' => 'Borarr mensaje',
	'confirm_message_deletion' => '¿Seguro que desea borrar este mensaje?',
	
	// Profile settings
	'display_name' => 'Mostar nombre',
	'upload_an_avatar' => 'Subir avatar (solo .jpg, .png o .gif):',
	
	// Alerts
	'viewing_unread_alerts' => 'Viendo las alertas no leídas. Cambiar a <a href="/user/alerts/?view=read"><span class="label label-success">leidas</span></a>.',
	'viewing_read_alerts' => 'Viendo las alertas ya lídas. Cambiar a <a href="/user/alerts/"><span class="label label-warning">no leídas</span></a>.',
	'no_unread_alerts' => 'No tiene alertas sin leer.',
	'no_read_alerts' => 'No tiene alertas leídas.',
	'view' => 'Ver',
	'alert' => 'Alerta',
	'when' => 'Cuando',
	'delete' => 'Borrar',
	'tag' => 'Marcar usuario',
	'report' => 'Informe',
	'deleted_alert' => 'Alerta borrada correctamente',
	
	// Warnings
	'you_have_received_a_warning' => 'Ha recibido una advertencia de {x} el {y}.', // Don't replace "{x}" or "{y}"
	'acknowledge' => 'Informado',
	
	// Forgot password
	'password_reset' => 'Reiniciar contraseña',
	'email_body' => 'Ha recibido este correo porque ha pedido un reinicio de contraseña. Para proceder con el reinicio de la contraseña seleccione el siguiente enlace:', // Body for the password reset email
	'email_body_2' => 'Si no ha pedido un reinicio de contraseña, puede ignorar este correo.',
	'password_email_set' => 'Correcto. Verifique su correo para mas indicaciones.',
	'username_not_found' => 'El usuario no existe.',
	'change_password' => 'Cambiar contraseña',
	'your_password_has_been_changed' => 'Su contraseña se ha cambiado.',
	
	// Profile page
	'profile' => 'Perfil',
	'player' => 'Jugador',
	'offline' => 'Desconectado',
	'online' => 'Conectado',
	'pf_registered' => 'Registrado:',
	'pf_posts' => 'Mensajes:',
	'pf_reputation' => 'Reputación:',
	'user_hasnt_registered' => 'Este usario no se ha registrado ene este sitio todavía',
	'user_no_friends' => 'El usuario no ha añadido amigos',
	'send_message' => 'Mandar mensaje',
	'remove_friend' => 'Eliminar amigo',
	'add_friend' => 'Añadir amigo',
	
	// Staff applications
	'staff_application' => 'Staff Application',
	'application_submitted' => 'Application submitted successfully.',
	'application_already_submitted' => 'You\'ve already submitted an application. Please wait until it is complete before submitting another.',
	'not_logged_in' => 'Please log in to view that page.'
);

/*
 *  Moderation related
 */
$mod_language = array(
	'mod_cp' => 'Panel de Moderacón',
	'overview' => 'Información general',
	'reports' => 'Informes',
	'punishments' => 'Castigos',
	'staff_applications' => 'Administración',
	
	// Punishments
	'ban' => 'Inhabilitar',
	'unban' => 'Habilitar',
	'warn' => 'Avisar',
	'search_for_a_user' => 'Buscar usuario',
	'user' => 'Usuario:',
	'ip_lookup' => 'Dirección IP:',
	'registered' => 'Registrado',
	'reason' => 'Razón:',
	
	// Reports
	'report_closed' => 'Informe cerrado.',
	'new_comment' => 'Nuevo comentario',
	'comments' => 'Comentarios',
	'only_viewed_by_staff' => 'Sólo puede ser visto por los administradores',
	'reported_by' => 'Informado por',
	'close_issue' => 'Cerrar tema',
	'report' => 'Informe:',
	'view_reported_content' => 'Ver contenido del informe',
	'no_open_reports' => 'No hay informes abiertos',
	'user_reported' => 'usuarios notificados',
	'type' => 'Tipo',
	'updated_by' => 'Actualizado por',
	'forum_post' => 'Mensaje en el foro',
	'user_profile' => 'Perfil del usuario',
	'comment_added' => 'Comentario añadido.',
	'new_report_submitted_alert' => 'Nuevo informe presentado por {x} especto al usuario {y}', // Don't replace "{x}" or "{y}"
	
	// Staff applications
	'comment_error' => 'Please ensure your comment is between 2 and 2048 characters long.',
	'viewing_open_applications' => 'Viewing <span class="label label-info">open</span> applications. Change to <a href="/mod/applications/?view=accepted"><span class="label label-success">accepted</span></a> or <a href="/mod/applications/?view=declined"><span class="label label-danger">declined</span></a>.',
	'viewing_accepted_applications' => 'Viewing <span class="label label-success">accepted</span> applications. Change to <a href="/mod/applications/"><span class="label label-info">open</span></a> or <a href="/mod/applications/?view=declined"><span class="label label-danger">declined</span></a>.',
	'viewing_declined_applications' => 'Viewing <span class="label label-danger">declined</span> applications. Change to <a href="/mod/applications/"><span class="label label-info">open</span></a> or <a href="/mod/applications/?view=accepted"><span class="label label-success">accepted</span></a>.',
	'time_applied' => 'Time Applied',
	'no_applications' => 'No applications in this category',
	'viewing_app_from' => 'Viewing application from {x}', // Don't replace "{x}"
	'open' => 'Open',
	'accepted' => 'Accepted',
	'declined' => 'Declined',
	'accept' => 'Accept',
	'decline' => 'Decline',
	'new_app_submitted_alert' => 'New application submitted by {x}' // Don't replace "{x}"
);

/* 
 *  General
 */
$general_language = array(
	// Homepage
	'news' => 'Noticias',
	'social' => 'Social',
	
	// General terms
	'submit' => 'Enviar',
	'close' => 'Cerrar',
	'cookie_message' => '<strong>Este sitio utiliza <i>cookies</i> para una mejor experiencia.</strong><p>Si continua navengado por nuestro sitio está aceptado el uso de elllas.</p>',
	'theme_not_exist' => 'El tema seleccionado no existe.',
	'confirm' => 'Confirmar',
	'cancel' => 'Camcelar',
	'guest' => 'Invitado',
	'guests' => 'invitados',
	'back' => 'Volver',
	'search' => 'Buscar',
	'help' => 'Ayuda',
	'success' => 'Correcto',
	'error' => 'Error',
	'view' => 'Ver',
	
	// Play page
	'connect_with' => 'Conectado al servidor desde la IP {x}', // Don't replace {x}
	'online' => 'Conectado',
	'offline' => 'Desconectado',
	'status' => 'Esado:',
	'players_online' => 'Jugadores conectados:',
	'queried_in' => 'Peticiones:',
	'server_status' => 'Estado del servidor',
	'no_players_online' => '¡No hay jugadores conectados!',
	'x_players_online' => 'Hay {x} jugadores conectados.', // Don't replace {x}
	
	// Other
	'page_loaded_in' => 'Página cargada en {x}s', // Don't replace {x}; 's' stands for 'seconds'
	'none' => 'Nada'
);

/* 
 *  Forum
 */
$forum_language = array(
	// Latest discussions view
	'forums' => 'Foros',
	'discussion' => 'Conversación',
	'stats' => 'Estadísticas',
	'last_reply' => 'Última respuesta',
	'ago' => 'hace',
	'by' => 'por',
	'in' => 'en',
	'views' => 'vistas',
	'posts' => 'mensaje',
	'topics' => 'temas',
	'topic' => 'Tema',
	'statistics' => 'Estadísticas',
	'overview' => 'Información general',
	'latest_discussions' => 'Últimas conversaciones',
	'latest_posts' => 'Últimos temas',
	'users_registered' => 'Usuario registrados:',
	'latest_member' => 'Último miembro:',
	'forum' => 'Foro',
	'last_post' => 'Ultima publicación',
	'no_topics' => 'No hay temas todavía',
	'new_topic' => 'Nuevo tema',
	'subforums' => 'Sub-foro:',
	
	// View topic view
	'home' => 'Inicio',
	'topic_locked' => 'Tema cerrado',
	'new_reply' => 'Nueva respuesta',
	'mod_actions' => 'Moderar',
	'lock_thread' => 'Cerrar tema',
	'unlock_thread' => 'Abrir tema',
	'merge_thread' => 'Combiar temas',
	'delete_thread' => 'Borrar tema',
	'confirm_thread_deletion' => '¿Seguro que desea borrar este tema?',
	'move_thread' => 'Mover tema',
	'sticky_thread' => 'Fijar tema',
	'report_post' => 'Informar mensaje',
	'quote_post' => 'Citar',
	'delete_post' => 'Borar mensaje',
	'edit_post' => 'Editar mensaje',
	'reputation' => 'reputación',
	'confirm_post_deletion' => '¿Seguro que desea borrar este mensaje?',
	'give_reputation' => 'Dar reputación',
	'remove_reputation' => 'Quitar reputación',
	'post_reputation' => 'Mostar reputación',
	'no_reputation' => 'No hay reputación para este tema',
	're' => 'RE:',
	
	// Create post view
	'create_post' => 'Crear mensaje',
	'post_submitted' => 'Mensaje publicado',
	'creating_post_in' => 'Creado mensaje en: ',
	'topic_locked_permission_post' => 'Este tema está cerrado, sin embargo pude publicar',
	
	// Edit post view
	'editing_post' => 'Editando tema',
	
	// Sticky threads
	'thread_is_' => 'El hilo es ',
	'now_sticky' => 'el tema es fijo',
	'no_longer_sticky' => 'el tema no es fijo',
	
	// Create topic
	'topic_created' => 'Tema creado.',
	'creating_topic_in_' => 'Creando tema en el foro ',
	'thread_title' => 'Título del tema',
	'confirm_cancellation' => '¿seguro?',
	'label' => 'Etiqueta',
	
	// Reports
	'report_submitted' => 'Informe subido.',
	'view_post_content' => 'Ver contenido publicado',
	'report_reason' => 'Razón del informe',
	
	// Move thread
	'move_to' => 'Mover a:',
	
	// Merge threads
	'merge_instructions' => 'El tema a combinar <strong>debe</strong> estar en el mismo foro. Mueva el tema si es necesario.',
	'merge_with' => 'Combinar con:',
	
	// Other
	'forum_error' => 'Lo sentimos, pero no se encontró en los foros o los temas.',
	'are_you_logged_in' => '¿Se ha registrado?'
);

/*
 *  Emails
 */
$email_language = array(
	// Registration email
	'greeting' => 'Hola',
	'message' => '¡Gracias por registrarse! Para finalizar el regsitro es necesario que pulse sobre el siguiente enlace:',
	'thanks' => 'Gracias,'
);

/*
 *  Time language, eg "1 minute ago"
 *  DON'T replace "{x}" in any translations
 */
$time_language = array(
	'seconds_short' => 's', // Shortened "seconds", eg "s"
	'less_than_a_minute' => 'hace menos de un minuto',
	'1_minute' => 'hace 1 minuto',
	'_minutes' => 'hace {x} minutos',
	'about_1_hour' => 'hace 1 hora',
	'_hours' => 'hace {x} horas',
	'1_day' => 'hace 1 día',
	'_days' => 'hace {x} días',
	'about_1_month' => 'hace 1 mes',
	'_months' => 'hace {x} meses',
	'about_1_year' => 'hace 1 año',
	'over_x_years' => 'hace más {x} años'
);
 
/*
 *  Table language; used for "DataTables" Javascript tables
 */
$table_language = array(
	'display_records_per_page' => 'Mostar entradas _MENU_ por página', // Don't replace "_MENU_"
	'nothing_found' => 'Sin resultados',
	'page_x_of_y' => 'Mostrando página _PAGE_ de _PAGES_', // Don't replace "_PAGE_" or "_PAGES_"
	'no_records' => 'No hay entradas',
	'filtered' => '(entradas filtrado un total de _MAX_)' // Don't replace "_MAX_"
);

?>

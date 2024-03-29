<?php
//Forma mas facil de implementar
function saludar_configuracion() {
  $form['saludar_saludo'] = array(
    '#title' => 'Saludo que se muestra al usuario',
    '#type' => 'textfield',
    '#default_value' => variable_get('saludar_saludo', t('Hello World') ),
    '#required' => TRUE,
  );
  return system_settings_form($form);
}


/**
 * @file
 * Callbacks de administración del módulo saludar
 */

/**
 * Definir el formulario de opciones de configuración
 */
// function saludar_configuracion() {
//   $form['saludar_saludo'] = array(
//     '#title' => 'Saludo que se muestra al usuario',
//     '#type' => 'textfield',
//     '#default_value' => variable_get('saludar_saludo', 'Hola Mundo'),
//   );§
//   $form['submit'] = array(
//       '#type' => 'submit',
//       '#value' => 'Guardar configuración',
//   );
//   $form['#submit'][] = 'saludar_configuracion_submit';
//   return $form;
// }

/**
 * Validar el formulario de opciones de configuración
 */
// function saludar_configuracion_validate($form, &$form_state) {
//   if (trim($form_state['values']['saludar_saludo']) == '') {
//     form_set_error('saludar_saludo', 'El saludo no puede quedar vacío.');
//   }
// }

/**
 * Procesar el envío del formulario de opciones de configuración
 */
// function saludar_configuracion_submit($form, $form_state) {
//   variable_set('saludar_saludo', $form_state['values']['saludar_saludo']);
//   drupal_set_message("Se han guardado las opciones de configuración.");
// }
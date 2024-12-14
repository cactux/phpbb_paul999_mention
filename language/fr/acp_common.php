<?php
/**
 *
 * Simple mentions. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2016, paul999, <https://www.phpbbextensions.io>
 * @license GNU General Public License, version 2 (GPL-2.0-only)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'MENTION_LENGTH'                => 'Longueur minimale du texte pour afficher les suggestions de membres à mentionner',
	'MENTION_LENGTH_EXPLAIN'        => 'Permet de définir le nombre minimum de caractères à saisir avant d’afficher le menu déroulant suggérant les membres à mentionner.
	Pour les forums volumineux il est recommandé d’augmenter cette valeur.',
	'MENTION_COLOR'                 => 'Couleur de la mention',
	'MENTION_COLOR_EXPLAIN'         => 'Permet de définir la couleur utilisée pour mentionner l’utilisateur dans le message. Les valeurs acceptées doivent être au format HEXADÉCIMAL.',
	'MENTION_COLOR_INVALID'         => 'La couleur sélectionnée pour mentionner (%s) est incorrecte. Merci de sélectionner une couleur au format HEXADÉCIMAL, sans le caractère #.',
	'MENTION_MAX_RESULTS'			=> 'Nombre max de résultats Simple mention',
	'MENTION_MAX_RESULTS_EXPLAIN'	=> 'Nombre maximum d’utilisateurs à afficher dans le menu déroulant. Pour les forums volumineux, il est conseillé de baisser cette valeur.',
	'MENTION_LARGE_GROUPS'			=> 'Taille pour mentionner les grands groupes',
	'MENTION_LARGE_GROUPS_EXPLAIN'	=> 'Si le groupe a plus de membres que cette valeur, la permission “Peut mentionner de grands groupes” sera nécessaire.'
));

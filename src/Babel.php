<?php
//----------------------------------------------------------------------------------------------------------------------
namespace SetBased\Abc\Babel;

/**
 * Interface for classes for objects for retrieving linguistic entities in any language.
 */
interface Babel
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Completely style date format specifier (Sunday, April 10, 1966).
   */
  const FORMAT_FULL = 1;

  /**
   * Long style date format specifier (April 10, 1966).
   */
  const FORMAT_LONG = 2;

  /**
   * Medium style date format specifier (Apr 10, 1966).
   */
  const FORMAT_MEDIUM = 3;

  /**
   * Short style date format specifier (04/10/1966).
   */
  const FORMAT_SHORT = 4;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the language code of the current default language.
   *
   * @return string
   *
   * @since 1.0.0
   * @api
   */
  public function getCode();

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the direction of the current default language. See [dir](https://www.w3schools.com/tags/att_global_dir.asp)
   * attribute.
   *
   * @return string
   *
   * @since 1.0.0
   * @api
   */
  public function getDir();

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns a date formatted according to a date format specifier.
   *
   * @param int                   $dateType The date format specifier. One of:
   *                                        <ul>
   *                                        <li>Babel::FORMAT_FULL
   *                                        <li>Babel::FORMAT_LONG
   *                                        <li>Babel::FORMAT_MEDIUM
   *                                        <li>Babel::FORMAT_SHORT
   *                                        </ul>
   * @param string|\DateTime|null $date     The date.
   *
   * @return string
   *
   * @since 1.0.0
   * @api
   */
  public function getFormattedDate($dateType, $date);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns a text in the default language with special characters converted to HTML entities.
   *
   * @param int $txtId The ID of the text.
   *
   * @return string
   *
   * @since 1.0.0
   * @api
   */
  public function getHtmlText($txtId);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns a text in the default language using formatting (using
   * [vsprintf](http://php.net/manual/en/function.vsprintf.php)) with special characters converted to HTML entities.
   *
   * @param int   $txtId        The ID of the text.
   * @param bool  $formatIsHtml If true the format is valid HTML code with special characters converted to HTML
   *                            entities. Otherwise, the format is plain text and special characters will be converted
   *                            to HTML entities.
   * @param bool  $argsAreHtml  If true the arguments are valid HTML code with special characters converted to HTML
   *                            entities. Otherwise, the arguments are plain text and special characters will be
   *                            converted to HTML entities.
   * @param array $args         The parameters for the format string.
   *
   * @return string
   *
   * @since 1.0.0
   * @api
   */
  public function getHtmlTextFormatted($txtId, $formatIsHtml, $argsAreHtml, $args);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns a text in the default language in which substrings are replaced (using
   * [strtr](http://php.net/manual/en/function.strtr.php)) with special characters converted to HTML entities.
   *
   * @param int   $txtId        The ID of the text.
   * @param bool  $formatIsHtml If true the text is valid HTML code with special characters converted to HTML
   *                            entities. Otherwise, the text is plain text and special characters will be converted
   *                            to HTML entities.
   * @param bool  $argsAreHtml  If true the replace values are valid HTML code with special characters converted to HTML
   *                            entities. Otherwise, the replace values are plain text and special characters will be
   *                            converted to HTML entities.
   * @param array $replacePairs The parameters for the format string.
   *
   * @return string
   *
   * @since 1.0.0
   * @api
   */
  public function getHtmlTextReplaced($txtId, $formatIsHtml, $argsAreHtml, $replacePairs);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns a word in the default language with special characters converted to HTML entities.
   *
   * @param int $wrdId The ID of the word.
   *
   * @return string
   *
   * @since 1.0.0
   * @api
   */
  public function getHtmlWord($wrdId);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the ID of the current default language.
   *
   * @return int
   *
   * @since 1.0.0
   * @api
   */
  public function getLanId();

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the ISO 639-1 language code of the current default language. See
   * [lang](https://www.w3schools.com/tags/ref_language_codes.asp) attribute.
   *
   * @return string
   *
   * @since 1.0.0
   * @api
   */
  public function getLang();

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns a text in the default language.
   *
   * @param int $txtId The ID of the text.
   *
   * @return string
   *
   * @since 1.0.0
   * @api
   */
  public function getText($txtId);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns a text in the default language using formatting (using
   * [vsprintf](http://php.net/manual/en/function.vsprintf.php)).
   *
   * @param int   $txtId The ID of the text.
   * @param array $args  The parameters for the format string.
   *
   * @return string
   *
   * @since 1.0.0
   * @api
   */
  public function getTextFormatted($txtId, $args);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns a text in the default language in which substrings are replaced (using
   * [strtr](http://php.net/manual/en/function.strtr.php)).
   *
   * @param int   $txtId        The ID of the text.
   * @param array $replacePairs The replace pairs.
   *
   * @return string
   *
   * @since 1.0.0
   * @api
   */
  public function getTextReplaced($txtId, $replacePairs);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns a word in the default language.
   *
   * @param int $wrdId The ID of the word.
   *
   * @return string
   *
   * @since 1.0.0
   * @api
   */
  public function getWord($wrdId);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Restores the previous default language as the current default language.
   *
   * @return void
   *
   * @since 1.0.0
   * @api
   */
  public function popLanguage();

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Sets and pushes a new default language.
   *
   * @param int $lanId The ID of the new default language.
   *
   * @return void
   *
   * @since 1.0.0
   * @api
   */
  public function pushLanguage($lanId);

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Replace the current default language with a new default language.
   *
   * @param int $lanId The ID of the new default language.
   *
   * @return void
   *
   * @since 1.0.0
   * @api
   */
  public function setLanguage($lanId);

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------

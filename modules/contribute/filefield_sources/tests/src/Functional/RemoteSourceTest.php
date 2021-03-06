<?php

namespace Drupal\Tests\filefield_sources\Functional;

/**
 * Tests the remote source.
 *
 * @group filefield_sources
 */
class RemoteSourceTest extends FileFieldSourcesTestBase {

  /**
   * Tests remote source enabled.
   */
  public function testRemoteSourceEnabled() {
    $this->enableSources([
      'remote' => TRUE,
    ]);

    $module_path = \Drupal::service('module_handler')->getModule('filefield_sources')->getPath();
    $file_url = $GLOBALS['base_url'] . $GLOBALS['base_path'] . $module_path . '/README.txt';
    // Upload a file by 'Remote' source.
    $this->uploadFileByRemoteSource($file_url, 'README.txt', 0);

    // We can only transfer one file on single value field.
    $this->assertNoFieldByXPath('//input[@type="submit"]', t('Transfer'), t('After uploading a file, "Transfer" button is no longer displayed.'));

    // Remove uploaded file.
    $this->removeFile('README.txt', 0);

    // Can transfer file again.
    $this->assertFieldByXpath('//input[@type="submit"]', t('Transfer'), 'After clicking the "Remove" button, the "Transfer" button is displayed.');
  }

  /**
   * Tests remote source with an special character.
   */
  public function testFileWithSpecialCharacters() {
    $this->enableSources([
      'remote' => TRUE,
    ]);

    $module_path = \Drupal::service('module_handler')->getModule('filefield_sources')->getPath();
    // The file is called βγ.txt but it is escaped so it can be downloaded fine.
    $file_url = $GLOBALS['base_url'] . $GLOBALS['base_path'] . $module_path . '/tests/files/%CE%B2%CE%B3.txt';
    // Upload a file by 'Remote' source.
    $this->uploadFileByRemoteSource($file_url, 'bg.txt', 0);

    // We can only transfer one file on single value field.
    $this->assertNoFieldByXPath('//input[@type="submit"]', t('Transfer'), t('After uploading a file, "Transfer" button is no longer displayed.'));

    // Remove uploaded file.
    $this->removeFile('bg.txt', 0);
  }

}

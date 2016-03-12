api = 2
core = 7.x

; Drupal core.
projects[drupal][type] = core
projects[drupal][version] = 7.43
projects[drupal][patch][] = "https://drupal.org/files/issues/install-redirect-on-empty-database-728702-36.patch"

projects[]= stacksight
; For stacksight health
projects[]= security_review
projects[]= backup_migrate
projects[]= yoast_seo
; yoast dependencies
projects[]= metatag
projects[]= ctools
projects[]= token
projects[]= devel

; Drush make allows a default sub directory for all contributed projects.
defaults[projects][subdir] = contrib

; Platform indicator module.
projects[platform][version] = 1.3

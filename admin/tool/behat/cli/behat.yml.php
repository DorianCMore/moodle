default:
  formatters:
    moodle_progress:
      output_styles:
        comment:
          - magenta
  extensions:
    Behat\MinkExtension:
      base_url: 'http://localhost'
      goutte: null
      browser_name: chrome
      sessions:
        javascript:
          chrome:
            api_url: 'http://127.0.0.1:9222'
    Moodle\BehatExtension:
      moodledirroot: <?php echo $_ENV['PROJECT_PATH']?>
      steps_definitions:
        behat_action_menu: <?php echo $_ENV['PROJECT_PATH']?>/lib/tests/behat/behat_action_menu.php
        behat_admin: <?php echo $_ENV['PROJECT_PATH']?>/admin/tests/behat/behat_admin.php
        behat_assignfeedback_editpdf: <?php echo $_ENV['PROJECT_PATH']?>/mod/assign/feedback/editpdf/tests/behat/behat_assignfeedback_editpdf.php
        behat_auth: <?php echo $_ENV['PROJECT_PATH']?>/auth/tests/behat/behat_auth.php
        behat_backup: <?php echo $_ENV['PROJECT_PATH']?>/backup/util/ui/tests/behat/behat_backup.php
        behat_block_comments: <?php echo $_ENV['PROJECT_PATH']?>/blocks/comments/tests/behat/behat_block_comments.php
        behat_block_site_main_menu: <?php echo $_ENV['PROJECT_PATH']?>/blocks/site_main_menu/tests/behat/behat_block_site_main_menu.php
        behat_block_social_activities: <?php echo $_ENV['PROJECT_PATH']?>/blocks/social_activities/tests/behat/behat_block_social_activities.php
        behat_blocks: <?php echo $_ENV['PROJECT_PATH']?>/blocks/tests/behat/behat_blocks.php
        behat_calendar: <?php echo $_ENV['PROJECT_PATH']?>/calendar/tests/behat/behat_calendar.php
        behat_cohort: <?php echo $_ENV['PROJECT_PATH']?>/cohort/tests/behat/behat_cohort.php
        behat_completion: <?php echo $_ENV['PROJECT_PATH']?>/completion/tests/behat/behat_completion.php
        behat_course: <?php echo $_ENV['PROJECT_PATH']?>/course/tests/behat/behat_course.php
        behat_data_generators: <?php echo $_ENV['PROJECT_PATH']?>/lib/tests/behat/behat_data_generators.php
        behat_deprecated: <?php echo $_ENV['PROJECT_PATH']?>/lib/tests/behat/behat_deprecated.php
        behat_editor_atto: <?php echo $_ENV['PROJECT_PATH']?>/lib/editor/atto/tests/behat/behat_editor_atto.php
        behat_enrol: <?php echo $_ENV['PROJECT_PATH']?>/enrol/tests/behat/behat_enrol.php
        behat_filepicker: <?php echo $_ENV['PROJECT_PATH']?>/repository/tests/behat/behat_filepicker.php
        behat_forms: <?php echo $_ENV['PROJECT_PATH']?>/lib/tests/behat/behat_forms.php
        behat_general: <?php echo $_ENV['PROJECT_PATH']?>/lib/tests/behat/behat_general.php
        behat_grade: <?php echo $_ENV['PROJECT_PATH']?>/grade/tests/behat/behat_grade.php
        behat_gradereport_grader: <?php echo $_ENV['PROJECT_PATH']?>/grade/report/grader/tests/behat/behat_gradereport_grader.php
        behat_grading: <?php echo $_ENV['PROJECT_PATH']?>/grade/grading/tests/behat/behat_grading.php
        behat_gradingform_guide: <?php echo $_ENV['PROJECT_PATH']?>/grade/grading/form/guide/tests/behat/behat_gradingform_guide.php
        behat_gradingform_rubric: <?php echo $_ENV['PROJECT_PATH']?>/grade/grading/form/rubric/tests/behat/behat_gradingform_rubric.php
        behat_groups: <?php echo $_ENV['PROJECT_PATH']?>/group/tests/behat/behat_groups.php
        behat_hooks: <?php echo $_ENV['PROJECT_PATH']?>/lib/tests/behat/behat_hooks.php
        behat_login: <?php echo $_ENV['PROJECT_PATH']?>/login/tests/behat/behat_login.php
        behat_message: <?php echo $_ENV['PROJECT_PATH']?>/message/tests/behat/behat_message.php
        behat_message_popup: <?php echo $_ENV['PROJECT_PATH']?>/message/output/popup/tests/behat/behat_message_popup.php
        behat_mod_choice: <?php echo $_ENV['PROJECT_PATH']?>/mod/choice/tests/behat/behat_mod_choice.php
        behat_mod_data: <?php echo $_ENV['PROJECT_PATH']?>/mod/data/tests/behat/behat_mod_data.php
        behat_mod_feedback: <?php echo $_ENV['PROJECT_PATH']?>/mod/feedback/tests/behat/behat_mod_feedback.php
        behat_mod_forum: <?php echo $_ENV['PROJECT_PATH']?>/mod/forum/tests/behat/behat_mod_forum.php
        behat_mod_glossary: <?php echo $_ENV['PROJECT_PATH']?>/mod/glossary/tests/behat/behat_mod_glossary.php
        behat_mod_quiz: <?php echo $_ENV['PROJECT_PATH']?>/mod/quiz/tests/behat/behat_mod_quiz.php
        behat_mod_workshop: <?php echo $_ENV['PROJECT_PATH']?>/mod/workshop/tests/behat/behat_mod_workshop.php
        behat_navigation: <?php echo $_ENV['PROJECT_PATH']?>/lib/tests/behat/behat_navigation.php
        behat_permissions: <?php echo $_ENV['PROJECT_PATH']?>/lib/tests/behat/behat_permissions.php
        behat_qtype_ddimageortext: <?php echo $_ENV['PROJECT_PATH']?>/question/type/ddimageortext/tests/behat/behat_qtype_ddimageortext.php
        behat_qtype_ddmarker: <?php echo $_ENV['PROJECT_PATH']?>/question/type/ddmarker/tests/behat/behat_qtype_ddmarker.php
        behat_qtype_ddwtos: <?php echo $_ENV['PROJECT_PATH']?>/question/type/ddwtos/tests/behat/behat_qtype_ddwtos.php
        behat_qtype_gapselect: <?php echo $_ENV['PROJECT_PATH']?>/question/type/gapselect/tests/behat/behat_qtype_gapselect.php
        behat_question: <?php echo $_ENV['PROJECT_PATH']?>/question/tests/behat/behat_question.php
        behat_question_base: <?php echo $_ENV['PROJECT_PATH']?>/question/tests/behat/behat_question_base.php
        behat_repository_upload: <?php echo $_ENV['PROJECT_PATH']?>/repository/upload/tests/behat/behat_repository_upload.php
        behat_theme_boost_behat_action_menu: <?php echo $_ENV['PROJECT_PATH']?>/theme/boost/tests/behat/behat_theme_boost_behat_action_menu.php
        behat_theme_boost_behat_admin: <?php echo $_ENV['PROJECT_PATH']?>/theme/boost/tests/behat/behat_theme_boost_behat_admin.php
        behat_theme_boost_behat_blocks: <?php echo $_ENV['PROJECT_PATH']?>/theme/boost/tests/behat/behat_theme_boost_behat_blocks.php
        behat_theme_boost_behat_course: <?php echo $_ENV['PROJECT_PATH']?>/theme/boost/tests/behat/behat_theme_boost_behat_course.php
        behat_theme_boost_behat_filepicker: <?php echo $_ENV['PROJECT_PATH']?>/theme/boost/tests/behat/behat_theme_boost_behat_filepicker.php
        behat_theme_boost_behat_files: <?php echo $_ENV['PROJECT_PATH']?>/theme/boost/tests/behat/behat_theme_boost_behat_files.php
        behat_theme_boost_behat_grade: <?php echo $_ENV['PROJECT_PATH']?>/theme/boost/tests/behat/behat_theme_boost_behat_grade.php
        behat_theme_boost_behat_mod_quiz: <?php echo $_ENV['PROJECT_PATH']?>/theme/boost/tests/behat/behat_theme_boost_behat_mod_quiz.php
        behat_theme_boost_behat_navigation: <?php echo $_ENV['PROJECT_PATH']?>/theme/boost/tests/behat/behat_theme_boost_behat_navigation.php
        behat_theme_boost_behat_repository_upload: <?php echo $_ENV['PROJECT_PATH']?>/theme/boost/tests/behat/behat_theme_boost_behat_repository_upload.php
        behat_tool_langimport: <?php echo $_ENV['PROJECT_PATH']?>/admin/tool/langimport/tests/behat/behat_tool_langimport.php
        behat_tool_lp: <?php echo $_ENV['PROJECT_PATH']?>/admin/tool/lp/tests/behat/behat_tool_lp.php
        behat_tool_lp_data_generators: <?php echo $_ENV['PROJECT_PATH']?>/admin/tool/lp/tests/behat/behat_tool_lp_data_generators.php
        behat_tool_usertours: <?php echo $_ENV['PROJECT_PATH']?>/admin/tool/usertours/tests/behat/behat_tool_usertours.php
        behat_transformations: <?php echo $_ENV['PROJECT_PATH']?>/lib/tests/behat/behat_transformations.php
        behat_workshopallocation_manual: <?php echo $_ENV['PROJECT_PATH']?>/mod/workshop/allocation/manual/tests/behat/behat_workshopallocation_manual.php
    DMore\ChromeExtension\Behat\ServiceContainer\ChromeExtension: null
  suites:
    default:
      contexts:
        - behat_assignfeedback_editpdf
        - behat_auth
        - behat_backup
        - behat_block_comments
        - behat_block_site_main_menu
        - behat_block_social_activities
        - behat_calendar
        - behat_cohort
        - behat_completion
        - behat_data_generators
        - behat_deprecated
        - behat_editor_atto
        - behat_enrol
        - behat_forms
        - behat_general
        - behat_gradereport_grader
        - behat_grading
        - behat_gradingform_guide
        - behat_gradingform_rubric
        - behat_groups
        - behat_hooks
        - behat_login
        - behat_message
        - behat_message_popup
        - behat_mod_choice
        - behat_mod_data
        - behat_mod_feedback
        - behat_mod_forum
        - behat_mod_glossary
        - behat_mod_workshop
        - behat_permissions
        - behat_qtype_ddimageortext
        - behat_qtype_ddmarker
        - behat_qtype_ddwtos
        - behat_qtype_gapselect
        - behat_question
        - behat_question_base
        - behat_theme_boost_behat_action_menu
        - behat_theme_boost_behat_admin
        - behat_theme_boost_behat_blocks
        - behat_theme_boost_behat_course
        - behat_theme_boost_behat_filepicker
        - behat_theme_boost_behat_files
        - behat_theme_boost_behat_grade
        - behat_theme_boost_behat_mod_quiz
        - behat_theme_boost_behat_navigation
        - behat_theme_boost_behat_repository_upload
        - behat_tool_langimport
        - behat_tool_lp
        - behat_tool_lp_data_generators
        - behat_tool_usertours
        - behat_transformations
        - behat_workshopallocation_manual
      paths:
    <?php foreach (explode("\n", file_get_contents('to_run.scenarios')) as $scenario): ?>
    <?php if (strlen($scenario) > 0): ?>- <?php echo $scenario.PHP_EOL ?><?php endif ?>
    <?php endforeach; ?>

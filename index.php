<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Page for testing Javascript loops.
 *
 * @package    local_looptest
 * @author     Tom Dickman <tomdickman@catalyst-au.net>
 * @copyright  2020 Catalyst IT
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
* Local plugin for testing Javascript loops.
*
* @package    local_looptest
* @author     Tom Dickman <tomdickman@catalyst-au.net>
* @copyright  2020 Catalyst IT
* @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
*/

require_once('../../config.php');

global $OUTPUT, $PAGE;

require_login();

$PAGE->set_url('/local/looptest/index.php');
$PAGE->set_context(context_system::instance());

echo $OUTPUT->header();

echo html_writer::div("Test div:\n", 'test-div');
$PAGE->requires->js_call_amd('local_looptest/index', 'init');

echo $OUTPUT->footer();

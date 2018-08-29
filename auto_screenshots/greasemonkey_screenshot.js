// ==UserScript==
// @name        Screenshots from Simpletest
// @namespace   https://www.drupal.org/project/user_guide
// @description On Simpletest output, makes a script to save screen shots from special output.
// @include     http://*/admin/config/development/testing/results/*
// @include     https://*/admin/config/development/testing/results/*
// @version     1
// @grant       none
// ==/UserScript==

/**
 * Finds a TD element child of the input element, if there, and returns it.
 */
function findTdChild(elem) {
  var kids = elem.children;
  for (var i = 0; i < kids.length; i++) {
    if (kids[i].tagName == 'td' || kids[i].tagName == 'TD') {
      return kids[i];
    }
  }
  return 0;
}

/**
 * Builds the commands for the screenshots by parsing special lines in the page.
 */
function buildCommands() {
  var cmds = '';

  var output_dir = document.getElementById('output_dir').value;
  var window_id = document.getElementById('window_id').value;
  var offset_y = parseInt(document.getElementById('offset_y').value);
  var sleep_sec = document.getElementById('sleep_sec').value;

  // Go through the "passed" elements of the page.
  var passes = document.getElementsByClassName('simpletest-pass');
  for (var i = 0; i < passes.length; i++) {
    var item = passes.item(i);
    var td = findTdChild(item);
    if (!td) {
      continue;
    }
    var txt = td.textContent;
    if (txt.search('SCREENSHOT') >= 0) {
      // The line should be:
      // SCREENSHOT: filename url
      var info = txt.split(' ');
      if (info.length < 3) {
        alert('Info too short for ' + txt);
        continue;
      }
      var imageloc = output_dir + "/" + info[1];
      cmds += 'firefox ' + info[2] + "\n";
      cmds += 'sleep ' + sleep_sec + "\n";
      cmds += 'import -window ' + window_id + " " + imageloc + "\n";
      cmds += 'convert ' + imageloc + " -chop '0x" + offset_y + "'" +
        " -trim +repage " + imageloc + "\n";
    }
  }
  return cmds;
}

/**
 * Returns the backup lines in the page.
 */
function listBackups() {
  var lines = '';

  // Go through the "passed" elements of the page.
  var passes = document.getElementsByClassName('simpletest-pass');
  for (var i = 0; i < passes.length; i++) {
    var item = passes.item(i);
    var td = findTdChild(item);
    if (!td) {
      continue;
    }
    var txt = td.textContent;
    if (txt.search('BACKUP MADE') >= 0) {
      lines += txt + "\n";
    }
  }
  return lines;
}


/**
 * Outputs the commands into the special div.
 */
function outputCommands() {
  elem = document.getElementById('userguide-script-screenshots');
  elem.textContent = buildCommands();
}

// Make a form for the inputs to the script. But put it in a div not a form so
// it cannot be submitted by mistake.
var form = document.createElement('div');

// Put in a list of the backups that were made.
var backups = document.createElement('pre');
backups.textContent = listBackups();
form.appendChild(backups);

// Add input boxes for the script inputs.
var boxes = [
  ['output_dir', 'Output directory for images'],
  ['window_id', 'Window ID for Firefox, from xwininfo'],
  ['offset_y', 'Y offset (pixels) to get past Firefox toolbars'],
  ['sleep_sec', 'Seconds to wait for pages to load']
];
for (var i = 0; i < boxes.length; i++) {
  var elem = document.createElement('input');
  elem.setAttribute('name', boxes[i][0]);
  elem.setAttribute('id', boxes[i][0]);
  var label = document.createElement('label');
  label.setAttribute('for', boxes[i][0]);
  label.textContent = boxes[i][1] + ': ';
  form.appendChild(label);
  form.appendChild(elem);
  form.appendChild(document.createElement('br'));
}

// Add a button that will make the script.
var button = document.createElement('button');
button.textContent = 'Make screenshot script';
button.addEventListener('click', outputCommands, false);
form.appendChild(button);

// Append the form and an output div to the page.
document.body.appendChild(form);
var div = document.createElement('pre');
div.setAttribute('id', 'userguide-script-screenshots');
document.body.appendChild(div);

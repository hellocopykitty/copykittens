////////////////////////////////////////////////////////////////////////////////
//                                                                            //
//   Copyright (C) 2011  Phorum Development Team                              //
//   http://www.phorum.org                                                    //
//                                                                            //
//   This program is free software. You can redistribute it and/or modify     //
//   it under the terms of either the current Phorum License (viewable at     //
//   phorum.org) or the Phorum License that was distributed with this file    //
//                                                                            //
//   This program is distributed in the hope that it will be useful,          //
//   but WITHOUT ANY WARRANTY, without even the implied warranty of           //
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.                     //
//                                                                            //
//   You should have received a copy of the Phorum License                    //
//   along with this program.                                                 //
//                                                                            //
////////////////////////////////////////////////////////////////////////////////

// Javascript code for Smileys support in the Phorum editor_tools module.

// Some variables for storing objects that we need globally.
var editor_tools_smiley_picker_obj = null;
var editor_tools_subjectsmiley_picker_obj = null;

// Smileys for the smiley picker.
// *_s = search strings (smileys)
// *_r = replace strings (image urls)
var editor_tools_smileys = new Array();
var editor_tools_smileys_r = new Array();
var editor_tools_smileys_a = new Array();
var editor_tools_subjectsmileys = new Array();
var editor_tools_subjectsmileys_r = new Array();
var editor_tools_subjectsmileys_a = new Array();

// The width and offset to the left for the smiley picker popup menus.
// These values can be tweaked from the smiley module settings page.
var editor_tools_smileys_popupwidth = '150px';
var editor_tools_smileys_popupoffset = 0;
var editor_tools_subjectsmileys_popupwidth = '150px';
var editor_tools_subjectsmileys_popupoffset = 0;

// The available smileys.
editor_tools_smileys[0] = ':(';
editor_tools_smileys_r[0] = 'http://26240.foren.mysnip.de/smileys/smilie2.gif';
editor_tools_smileys_a[0] = ':(';
editor_tools_smileys[1] = ':rp:';
editor_tools_smileys_r[1] = 'http://26240.foren.mysnip.de/smileys/smiley25.gif';
editor_tools_smileys_a[1] = ':rp:';
editor_tools_smileys[2] = ':sneg:';
editor_tools_smileys_r[2] = 'http://26240.foren.mysnip.de/smileys/smiley23.gif';
editor_tools_smileys_a[2] = ':sneg:';
editor_tools_smileys[3] = ':spos:';
editor_tools_smileys_r[3] = 'http://26240.foren.mysnip.de/smileys/smiley24.gif';
editor_tools_smileys_a[3] = ':spos:';
editor_tools_smileys[4] = ':angry:';
editor_tools_smileys_r[4] = 'http://26240.foren.mysnip.de/smileys/smiley22.gif';
editor_tools_smileys_a[4] = ':angry:';
editor_tools_smileys[5] = ':xcool:';
editor_tools_smileys_r[5] = 'http://26240.foren.mysnip.de/smileys/cool.gif';
editor_tools_smileys_a[5] = ':xcool:';
editor_tools_smileys[6] = ':drink:';
editor_tools_smileys_r[6] = 'http://26240.foren.mysnip.de/smileys/smiley21.gif';
editor_tools_smileys_a[6] = ':drink:';
editor_tools_smileys[7] = ':cheers:';
editor_tools_smileys_r[7] = 'http://26240.foren.mysnip.de/smileys/smiley20.gif';
editor_tools_smileys_a[7] = ':cheers:';
editor_tools_smileys[8] = ':joke:';
editor_tools_smileys_r[8] = 'http://26240.foren.mysnip.de/smileys/smiley18.gif';
editor_tools_smileys_a[8] = ':joke:';
editor_tools_smileys[9] = ';)';
editor_tools_smileys_r[9] = 'http://26240.foren.mysnip.de/smileys/smilie3.gif';
editor_tools_smileys_a[9] = ';)';
editor_tools_smileys[10] = ':)';
editor_tools_smileys_r[10] = 'http://26240.foren.mysnip.de/smileys/smilie1.gif';
editor_tools_smileys_a[10] = ':)';
editor_tools_smileys[11] = ':hot:';
editor_tools_smileys_r[11] = 'http://26240.foren.mysnip.de/smileys/hot.gif';
editor_tools_smileys_a[11] = ':hot:';
editor_tools_smileys[12] = ':confused:';
editor_tools_smileys_r[12] = 'http://26240.foren.mysnip.de/smileys/smilie11.gif';
editor_tools_smileys_a[12] = ':confused:';
editor_tools_smileys[13] = ':eek:';
editor_tools_smileys_r[13] = 'http://26240.foren.mysnip.de/smileys/smilie10.gif';
editor_tools_smileys_a[13] = ':eek:';
editor_tools_smileys[14] = ':mad:';
editor_tools_smileys_r[14] = 'http://26240.foren.mysnip.de/smileys/smilie9.gif';
editor_tools_smileys_a[14] = ':mad:';
editor_tools_smileys[15] = ':rolleyes:';
editor_tools_smileys_r[15] = 'http://26240.foren.mysnip.de/smileys/smilie8.gif';
editor_tools_smileys_a[15] = ':rolleyes:';
editor_tools_smileys[16] = ':cool:';
editor_tools_smileys_r[16] = 'http://26240.foren.mysnip.de/smileys/smilie7.gif';
editor_tools_smileys_a[16] = ':cool:';
editor_tools_smileys[17] = ':p';
editor_tools_smileys_r[17] = 'http://26240.foren.mysnip.de/smileys/smilie6.gif';
editor_tools_smileys_a[17] = ':p';
editor_tools_smileys[18] = ':D';
editor_tools_smileys_r[18] = 'http://26240.foren.mysnip.de/smileys/smilie5.gif';
editor_tools_smileys_a[18] = ':D';
editor_tools_smileys[19] = ':o';
editor_tools_smileys_r[19] = 'http://26240.foren.mysnip.de/smileys/smilie4.gif';
editor_tools_smileys_a[19] = ':o';
editor_tools_smileys[20] = ';-)';
editor_tools_smileys_r[20] = 'http://26240.foren.mysnip.de/smileys/smilie3.gif';
editor_tools_smileys_a[20] = ';-)';
editor_tools_smileys[21] = ':-(';
editor_tools_smileys_r[21] = 'http://26240.foren.mysnip.de/smileys/smilie2.gif';
editor_tools_smileys_a[21] = ':-(';
editor_tools_smileys[22] = ':-)';
editor_tools_smileys_r[22] = 'http://26240.foren.mysnip.de/smileys/smilie1.gif';
editor_tools_smileys_a[22] = ':-)';

// ----------------------------------------------------------------------
// Tool: smiley
// ----------------------------------------------------------------------

function editor_tools_handle_smiley2()
{
    // Create the smiley picker on first access.
    if (!editor_tools_smiley_picker_obj)
    {
        // Create a new popup.
        var popup = editor_tools_construct_popup('editor-tools-smiley-picker','r');
        editor_tools_smiley_picker_obj = popup[0];
        var content_obj = popup[1];

        editor_tools_smiley_picker_obj.style.width = editor_tools_smileys_popupwidth;

        // Populate the new popup.
        for (var i = 0; i < editor_tools_smileys.length; i++)
        {
            var s = editor_tools_smileys[i];
            var r = editor_tools_smileys_r[i];
            var a = editor_tools_smileys_a[i];
            var a_obj = document.createElement('a');
            a_obj.href = 'javascript:editor_tools_handle_smiley_select("'+s+'")';
            var img_obj = document.createElement('img');
            img_obj.src = r;
            img_obj.title = a;
            img_obj.alt = a;
            a_obj.appendChild(img_obj);

            content_obj.appendChild(a_obj);
        }

        // Register the popup with the editor tools.
        editor_tools_register_popup_object(editor_tools_smiley_picker_obj);
    }

    // Display the popup.
    var button_obj = document.getElementById('editor-tools-img-smiley');
    editor_tools_toggle_popup(
        editor_tools_smiley_picker_obj,
        button_obj,
        editor_tools_smileys_popupwidth,
        editor_tools_smileys_popupoffset
    );
}

// Called by the smiley picker.
function editor_tools_handle_smiley_select(smiley)
{
    smiley = editor_tools_strip_whitespace(smiley);
    editor_tools_add_tags(smiley, '');
    editor_tools_focus_textarea();
}

// ----------------------------------------------------------------------
// Tool: subject smiley
// ----------------------------------------------------------------------

function editor_tools_handle_subjectsmiley2()
{
    // Create the smiley picker on first access.
    if (!editor_tools_subjectsmiley_picker_obj)
    {
        // Create a new popup.
        var popup = editor_tools_construct_popup('editor-tools-subjectsmiley-picker','r');
        editor_tools_subjectsmiley_picker_obj = popup[0];
        var content_obj = popup[1];

        // Populate the new popup.
        for (var i = 0; i < editor_tools_subjectsmileys.length; i++)
        {
            var s = editor_tools_subjectsmileys[i];
            var r = editor_tools_subjectsmileys_r[i];
            var a = editor_tools_subjectsmileys_a[i];

            var a_obj = document.createElement('a');
            a_obj.href = 'javascript:editor_tools_handle_subjectsmiley_select("'+s+'")';
            var img_obj = document.createElement('img');
            img_obj.src = r;
            img_obj.alt = a;
            img_obj.title = a;
            a_obj.appendChild(img_obj);
            content_obj.appendChild(a_obj);
        }

        // Register the popup with the editor tools.
        editor_tools_register_popup_object(editor_tools_subjectsmiley_picker_obj);
    }

    // Display the popup.
    var button_obj = document.getElementById('editor-tools-img-subjectsmiley');
    editor_tools_toggle_popup(
        editor_tools_subjectsmiley_picker_obj,
        button_obj,
        editor_tools_subjectsmileys_popupwidth,
        editor_tools_subjectsmileys_popupoffset
    );
}

// Called by the subject smiley picker.
function editor_tools_handle_subjectsmiley_select(smiley)
{
    smiley = editor_tools_strip_whitespace(smiley);
    editor_tools_add_tags(smiley, '', 'subject');
    editor_tools_focus_subjectfield();
}






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>A+PLUS::Wollo_University</title>
    <link rel="icon" type="image/x-icon" href="../image/logo-wu.png"> <!-- for extjs -->
    
    <script type="text/javascript" src="http://10.172.76.5/jquery/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="http://10.172.76.5/extjs/extjs-build/ext-all.js"></script>


    <link rel="stylesheet" type="text/css" href="http://10.172.76.5/extjs/extjs-build/resources/css/ext-all.css">
    <link rel="stylesheet" type="text/css" href="http://10.172.76.5/extjs/extjs-build/resources/css/ext-all-gray.css">
    
    <!-- Theme Loading Start-->
    <link rel="stylesheet" id="gray" type="text/css" href="http://10.172.76.5/extjs/extjs-build/resources/css/ext-all-gray.css"> <!-- for css -->

    <link rel="stylesheet" id="water" type="text/css" href="http://10.172.76.5/extjs/extjs-build/resources/css/ext-all.css"> <!-- for css -->

    <link rel="stylesheet" id="black" type="text/css" href="http://10.172.76.5/extjs/extjs-build/resources/css/ext-all-access.css"> <!-- for css -->

    <link rel="stylesheet" id="blue" type="text/css" href="http://10.172.76.5/extjs/extjs-build/resources/css/ext-all-neptune.css"> <!-- for css -->

    <!-- Theme Loading End-->

    <link rel="stylesheet" type="text/css" href="http://10.172.76.5/css/myExt.css" />
    <link rel="stylesheet" type="text/css" href="http://10.172.76.5/css/menu.css" /> <!-- messages -->
    <script type="text/javascript">
        document.getElementById('gray').disabled = true;
        document.getElementById('water').disabled = true;
        document.getElementById('black').disabled = true;
        document.getElementById('blue').disabled = true;
         Ext.Ajax.request({
                url: 'help/themeView',
                method: 'POST',
                timeout: 1800000,
                success: function(f, a) {
                        var response = Ext.decode(f.responseText);
                        if (response.success == true) {
                           $theme = response.data.theme;
                           console.log($theme);
                           document.getElementById($theme).disabled = false;
                        }
                    }
        });

         
        var sheight = screen.availHeight - 195;
        var setLimit = Math.round(screen.availHeight / 38);
        function Notification(type, msg_)
        {
       
                Lobibox.notify('info', {
                    position: 'bottom right',
                    sound: true,
                    delay: false,
                    title: 'Notification',
                    msg: msg_
                });

        }
        function warningFunction(title_, msg_) {
            Ext.Msg.show({
                title: title_,
                width: '100%',
                msg: msg_,
                closable: false,
                icon: Ext.Msg.WARNING,
                buttons: Ext.Msg.OK
            });
        }

        function infoFunction(title_, msg_) {
            Ext.Msg.show({
                title: title_,
                width: '100%',
                msg: msg_,
                autoScroll: true,
                closable: false,
                icon: Ext.Msg.INFO,
                buttons: Ext.Msg.OK
            });
        }

        function loadFunction(title_, msg_) {
            Ext.Msg.show({
                title: title_,
                width: '100%',
                msg: msg_,
                closable: false,
                icon: Ext.Msg.INFO
            });
        }

        function errorFunction(title_, msg_) {
            Ext.Msg.show({
                title: title_,
                width: '100%',
                msg: msg_,
                closable: false,
                icon: Ext.Msg.ERROR,
                buttons: Ext.Msg.OK
            });
        }

        function processingFunction(msg_) {
            Ext.MessageBox.show({
                msg: msg_,
                width: '100%',
                wait: true,
                waitConfig: {
                    interval: 100
                }
            });
        }
        function encrypt(str,KEY,IV) {
             key = CryptoJS.enc.Utf8.parse(KEY);
             var iv= CryptoJS.enc.Utf8.parse(IV);
             var encrypted = CryptoJS.AES.encrypt(str, key, { iv: iv, mode: CryptoJS.mode.CBC, padding: CryptoJS.pad.ZeroPadding });
             return encrypted.toString();
        }

         function decrypt(str,KEY,IV) {
             var key = CryptoJS.enc.Utf8.parse(KEY);
             var iv=    CryptoJS.enc.Utf8.parse(IV);
             var decrypted = CryptoJS.AES.decrypt(str,key,{iv:iv,padding:CryptoJS.pad.ZeroPadding});
             return decrypted.toString(CryptoJS.enc.Utf8);
         }

        Ext.define('Ext.ux.field.Clock',{
        extend: 'Ext.form.field.Display',
        xtype: 'clock',
        dateFormat: 'm/d/Y H:i:s',
        initComponent: function () {
            Ext.apply(this, {
                    listeners: {
                        boxready: function (field) {
                            field.runner = new Ext.util.DelayedTask(function () {
                                this.setValue(Ext.Date.format(new Date(), this.dateFormat || 'm/d/Y H:i:s'));
                                this.runner.delay(1000);
                            }, field);
                            field.runner.delay(1);
                        },
                        beforedestroy: function (field) {
                            if (field.runner) {
                                field.runner.cancel();
                                field.runner = null;
                            }
                        }
                    }
                });
                return this.callParent(arguments);
            }
        });  
        Ext.tip.QuickTipManager.init();
        Ext.QuickTips.interceptTitles = true;
        Ext.QuickTips.init();
        if (Ext.isSafari && Ext.safariVersion == 7) {
            delete Ext.tip.Tip.prototype.minWidth;
        }
        if (Ext.isIE10) {
            Ext.supports.Direct2DBug = true;
        }

        function addTooltip(value, metadata, record, rowIndex, colIndex, store) {
            metadata.tdAttr = 'data-qtip="' + value + '"';
            return value;
        }
    </script> <!-- CRUD -->
    <script type="text/javascript">
        function deleteFunction(url, params, extgrid, extgrid1) {
            processingFunction("Processing data, please wait...");
            Ext.Ajax.request({
                url: url,
                method: 'POST',
                params: params,
                timeout: 1800000,
                success: function(f, a) {
                    try {
                        Ext.MessageBox.hide();
                        var response = Ext.decode(f.responseText);
                        if (response.success == true) {
                            if (extgrid) Ext.getCmp(extgrid).getStore().reload({
                                params: {
                                    start: 0
                                },
                                timeout: 1000
                            });
                            if (extgrid1) Ext.getCmp(extgrid1).getStore().reload({
                                params: {
                                    start: 0
                                },
                                timeout: 1000
                            });
                            if (extgrid1 == 'studeptGrid') Ext.getCmp('departmentcharts').getStore().reload({
                                params: {
                                    start: 0
                                },
                                timeout: 1000
                            });
                            infoFunction('Status', response.data);
                        } 
                        else if (response.success == -1) 
                        {
                             warningFunction('Warning', response.data);
                        }
                        else errorFunction("Error!", response.data);
                    } catch (err) {
                        errorFunction("Error!", 'Connection Problem / Error Occur.');
                    }
                },
                failure: function(f, action) {
                    if(action.response.status == 403){
                        errorFunction("Error!", "<font color=red>You are trying to pass the system security Protocols with an authorized paramater or access. Your details has been saved for further invesigation");
                    }
                    else {
                        errorFunction("Error!", 'Please contact system administrator.');
                    }
                    
                }
            });
        }
        function NoMessageCrud(url, params, extgrid, extgrid1)
        {
            Ext.Ajax.request({
                url: url,
                method  : 'POST',
                params: params,
                timeout: 1800000,
                success: function(f,a)
                {
                    try 
                    {
                        Ext.MessageBox.hide();
                        var response = Ext.decode(f.responseText);     
                        if (response.success == true)
                        {
                            if (extgrid)
                            Ext.getCmp(extgrid).getStore().reload({params:{start:0 }, timeout: 1000});  
                            if (extgrid1)
                                Ext.getCmp(extgrid1).getStore().reload({params:{start:0 }, timeout: 1000});    
                        }
                        else{
                               errorFunction("Error!",response.data);
                        }
                    }
                    catch(err) {
                        errorFunction("Error!",'Connection Problem / Error Occur.');
                    }
                },
                failure: function(f,action) { errorFunction("Error!",'Please contact system administrator.'); }
            });
                   

        }
        function NoMessagePostJsonCrud(url, params, extgrid, extgrid1)
        {
            Ext.Ajax.request({
                url     :  url,
                method  : 'POST',
                jsonData: Ext.encode(params),
                timeout : 1800000,
                success : function(f,a)
                {
                    try 
                    {
                        var response = Ext.decode(f.responseText);     
                        if (response.success == true)
                        {
                            if (extgrid)
                            Ext.getCmp(extgrid).getStore().reload({params:{start:0 }, timeout: 1000});  
                            if (extgrid1)
                                Ext.getCmp(extgrid1).getStore().reload({params:{start:0 }, timeout: 1000});    
                        }
                        else{
                               errorFunction("Error!",response.data);
                        }
                    }
                    catch(err) {
                        errorFunction("Error!",'Connection Problem / Error Occur.');
                    }
                },
                failure: function(f,action) { errorFunction("Error!",'Please contact system administrator.'); }
            });
                   

        }

        function addeditFunction(url, params, extgrid, extgrid1, extform, extwindow) {
            processingFunction("Processing data, please wait...");
            extform.submit({
                url: url,
                method: "POST",
                params: params,
                timeout: 1800000,
                success: function(f, action) {
                    try {
                        Ext.MessageBox.hide();
                        if (action.result.success == true) {
                            if (extwindow != null) extwindow.close();
                            if (extgrid) Ext.getCmp(extgrid).getStore().reload({
                                params: {
                                    start: 0
                                },
                                timeout: 1000
                            });
                            if (extgrid1) Ext.getCmp(extgrid1).getStore().reload({
                                params: {
                                    start: 0
                                },
                                timeout: 1000
                            });
                            infoFunction('Status', action.result.data);
                        }
                        else if (action.result.success == -1) 
                        {
                             warningFunction('Warning', action.result.data);
                        }
                    } catch (err) {
                        errorFunction("Error!", 'Connection Problem / Error Occur.');
                    }
                },
                failure: function(f, action) {
                    if(action.response.status == 403){
                        errorFunction("Error!", "<font color=red>You are trying to pass the system security Protocols with an authorized paramater or access. Your details has been saved for further invesigation");
                    }
                    else {
                        errorFunction("Error!", action.result.data);
                    }
                    
                }
            });
        }
        
        function addeditFunctionpdf(url, params, extgrid, extgrid1, extform, extwindow,pdfids) {
            processingFunction("Processing data, please wait...");
            extform.submit({
                url: url,
                method: "POST",
                params: params,
                timeout: 1800000,
                success: function(f, action) {
                    try {
                        Ext.MessageBox.hide();
                        if (action.result.success == true) {
                            if (extwindow != null) extwindow.close();
                            if (extgrid) Ext.getCmp(extgrid).getStore().reload({
                                params: {
                                    start: 0
                                },
                                timeout: 1000
                            });
                            if (extgrid1) Ext.getCmp(extgrid1).getStore().reload({
                                params: {
                                    start: 0
                                },
                                timeout: 1000
                            });

                                Ext.Array.each(pdfids, function(id) {
                                 Ext.getCmp(id).setSrc('http://10.172.76.5/'+action.result.filepath);
                                }); 
                             //  if(typeof pdfids) 
                             //  {

                             //  }
                             // if(Ext.getCmp(pdfid))
                             // {
                             //     Ext.getCmp(pdfid).setSrc('http://10.172.76.5/'+action.result.filepath);
                             // }

                            infoFunction('Status', action.result.data);
                        }

                        else if (action.result.success == -1) 
                        {
                             warningFunction('Warning', action.result.data);
                        }
                    } catch (err) {
                        errorFunction("Error!", 'Connection Problem / Error Occur.');
                    }
                },
                failure: function(f, action) {
                    errorFunction("Error!", action.result.data);
                }
            });
        }
        function paneladdeditFunction(url, params, panelcontainer,extform, extwindow) {
            processingFunction("Processing data, please wait...");
            extform.submit({
                url: url,
                method: "POST",
                params: params,
                timeout: 1800000,
                success: function(f, action) {
                    console.log(action);
                    try {
                        Ext.MessageBox.hide();
                        if (action.result.success == true) {
                             if (extwindow != null) extwindow.close();
                            refreshpanelitems(panelcontainer);
                            infoFunction('Status', action.result.data);
                        }
                    } catch (err) {
                        errorFunction("Error!", 'Connection Problem / Error Occur.');
                    }
                },
                failure: function(f, action) {
                    if(action.response.status == 403){
                        errorFunction("Error!", "<font color=red>You are trying to pass the system security Protocols with an authorized paramater or access. Your details has been saved for further invesigation");
                    }
                    else {
                         errorFunction("Error!", action.result.data);
                    }
                   
                }
            });
        }
        function paneldeleteFunction(url, params,panelcontainer) {
            processingFunction("Processing data, please wait...");
            Ext.Ajax.request({
                url: url,
                method: 'POST',
                params: params,
                timeout: 1800000,
                success: function(f, a) {
                    try {
                        Ext.MessageBox.hide();
                        var response = Ext.decode(f.responseText);
                        if (response.success == true) {
                             refreshpanelitems(panelcontainer);
                            infoFunction('Status', response.data);
                        }
                        else if (response.success == 'NM') {
                             refreshpanelitems(panelcontainer);

                        }
                         else errorFunction("Error!", response.data);
                    } catch (err) {
                        errorFunction("Error!", 'Connection Problem / Error Occur.');
                    }
                },
                failure: function(f, action) {
                    errorFunction("Error!", 'Please contact system administrator.');
                }
            });
        }
    </script> <!-- Files -->
    <script type="text/javascript">
        function export_word(url, params, type) {
            processingFunction("Processing data, please wait...");
            Ext.Ajax.request({
                url: url,
                method: 'POST',
                params: params,
                timeout: 1800000,
                success: function(f, a) {
                    var response = Ext.decode(f.responseText);
                    Ext.MessageBox.hide();
                    
                },
                failure: function(f, action) {
                    errorFunction("Error!", 'Please contact system administrator.');
                }
            });
        }
        function export_excel(url, params, type) {
            processingFunction("Processing data, please wait...");
            Ext.Ajax.request({
                url: url,
                method: 'POST',
                params: params,
                timeout: 1800000,
                success: function(f, a) {
                    var response = Ext.decode(f.responseText);
                    Ext.MessageBox.hide();
                    if (response.success == true) {
                        if (type == "PDF") window.open("http://10.172.76.5/" + response.filename, 'PDFWindow', 'toolbar=0,menubar=0,location=0,di rectories=0,status=0,resizable=0');
                        else if (type == "WORD") window.open("http://10.172.76.5/" + response.filename);
                        else window.location = "http://10.172.76.5/" + response.filename;
                    } else errorFunction("Error!", response.data);
                },
                failure: function(f, action) {
                    if(action.response.status == 403){
                       errorFunction("Error!", "<font color=red>You are trying to pass the system security Protocols with an authorized paramater or access. Your details has been saved for further invesigation");
                    }
                    else {
                        errorFunction("Error!", 'Please contact system administrator.');
                    }
                }
            });
        }

        function ExportDocument(url, params, type) {
            Ext.Msg.show({
                title: 'Confirmation',
                msg: 'Are you sure you want to download ' + type + '?',
                width: '100%',
                icon: Ext.Msg.QUESTION,
                buttons: Ext.Msg.YESNO,
                fn: function(btn) {
                    if (btn == 'yes') export_excel(url, params, type);
                }
            });
        }
    </script> <!-- Date Range -->
    <script type="text/javascript">
        Ext.apply(Ext.form.field.VTypes, {
            daterange: function(val, field) {
                var date = field.parseDate(val);
                if (!date) {
                    return false;
                }
                if (field.startDateField && (!this.dateRangeMax || (date.getTime() != this.dateRangeMax.getTime()))) {
                    var start = field.up('form').down('#' + field.startDateField);
                    start.setMaxValue(date);
                    start.validate();
                    this.dateRangeMax = date;
                } else if (field.endDateField && (!this.dateRangeMin || (date.getTime() != this.dateRangeMin.getTime()))) {
                    var end = field.up('form').down('#' + field.endDateField);
                    end.setMinValue(date);
                    end.validate();
                    this.dateRangeMin = date;
                } /* * Always return true since we're only using this vtype to set the * min/max allowed values (these are tested for after the vtype test) */
                return true;
            },
            daterangeText: 'Start date must be less than end date',
            password: function(val, field) {
                if (field.initialPassField) {
                    var pwd = field.up('form').down('#' + field.initialPassField);
                    return (val == pwd.getValue());
                }
                return true;
            },
            passwordText: 'Passwords do not match'
        });
    Ext.define('Ext.form.field.Month', {
            extend: 'Ext.form.field.Date',
            alias: 'widget.monthfield',
            requires: ['Ext.picker.Month'],
            alternateClassName: ['Ext.form.MonthField', 'Ext.form.Month'],
            selectMonth: null,
            createPicker: function () {
                var me = this,
                    format = Ext.String.format;
                return Ext.create('Ext.picker.Month', {
                    pickerField: me,
                    ownerCt: me.ownerCt,
                    renderTo: document.body,
                    floating: true,
                    hidden: true,
                    focusOnShow: true,
                    minDate: me.minValue,
                    maxDate: me.maxValue,
                    disabledDatesRE: me.disabledDatesRE,
                    disabledDatesText: me.disabledDatesText,
                    disabledDays: me.disabledDays,
                    disabledDaysText: me.disabledDaysText,
                    format: me.format,
                    showToday: me.showToday,
                    startDay: me.startDay,
                    minText: format(me.minText, me.formatDate(me.minValue)),
                    maxText: format(me.maxText, me.formatDate(me.maxValue)),
                    listeners: {
                        select: { scope: me, fn: me.onSelect },
                        monthdblclick: { scope: me, fn: me.onOKClick },
                        yeardblclick: { scope: me, fn: me.onOKClick },
                        OkClick: { scope: me, fn: me.onOKClick },
                        CancelClick: { scope: me, fn: me.onCancelClick }
                    },
                    keyNavConfig: {
                        esc: function () {
                            me.collapse();
                        }
                    }
                });
            },
            onCancelClick: function () {
                var me = this;
                me.selectMonth = null;
                me.collapse();
            },
            onOKClick: function () {
                var me = this;
                if (me.selectMonth) {
                    me.setValue(me.selectMonth);
                    me.fireEvent('select', me, me.selectMonth);
                }
                me.collapse();
            },
            onSelect: function (m, d) {
                var me = this;
                me.selectMonth = new Date((d[0] + 1) + '/1/' + d[1]);
            }
        });
    </script>
    <script type="text/javascript">
        function UpdateSessionData() {
            Ext.Ajax.request({
                url: 'commonquery/updateSession',
                method: 'POST',
                success: function(f, a) {
                    var response = Ext.decode(f.responseText);
                    if (response.success == true) {
                        Ext.Msg.show({
                            title: 'Invalid Session',
                            msg: 'Session is already expired!. Please login again.',
                            width: '100%',
                            closable: false,
                            icon: Ext.Msg.ERROR,
                            buttons: Ext.Msg.OK,
                            fn: function(btn) {
                                if (btn == 'ok') {
                                    loadFunction('Route', 'Please wait. re-routing to login page.');
                                    Ext.Ajax.request({
                                        url: 'logout/terminateSession',
                                        method: 'POST',
                                        params: {
                                            id: response.data
                                        },
                                        success: function(f, a) {
                                            window.location = "http://10.172.76.5/";
                                        }
                                    });
                                }
                            }
                        });
                    } else setTimeout("UpdateSessionData();", 5000);
                },
                failure: function(f, action) {
                    errorFunction("Error!", 'Please contact system administrator.');
                }
            });
        }
    </script>
</head><!--  Notifications Plugin    -->
    <script src="http://10.172.76.5/assets/js/notify.js"></script>
<body>
	<div id="user">
		<font size=1 color=white face="verdana">ABEBE MINALE GEDFEW | Software Engineering Department 
				</font>

		<input type="hidden" name="hdnPosition" id="hdnPosition" value="0">
	<input type="hidden" name="postionApprover" id="postionApprover" value="0">
	</div>
	<div id="realtime">
		<font size=1 color=white face="verdana">Today is Saturday, February 17, 2024</font>
	</div>
	<div id="theme">
		  <script type="text/javascript">
      //   Ext.Ajax.on("beforerequest", function(){
      //      var csrf_test_name = "ci_csrf_token";
      //      csrfHash = "";
      //      console.log(csrf_test_name);
      //      //Ext.Ajax.defaultHeaders = Ext.apply(Ext.Ajax.defaultHeaders || {}, { csrf_test_name : csrfHash });
      //      Ext.Ajax.extraParams = {csrf_test_name: csrfHash};
      //      
      //  });
    Ext.onReady(function(){

        Ext.QuickTips.init();
        Ext.FocusManager.enable();

        var store = Ext.create('Ext.data.Store', {
            fields: ['order', 'id', 'name'],
            data : [
                {"id": "1",  "name": "Gray (<font color=red>Default</font>)"},
                {"id": "2",  "name": "Light Blue"},
                {"id": "3",  "name": "Blue"},
                {"id": "4",  "name": "Dark"}
            ]      
        });

        Ext.create('Ext.form.ComboBox', {
            fieldLabel: '<font color=white>Theme</font>',
            store: store,
            queryMode: 'local',
            displayField: 'name',
            valueField: 'id',
            renderTo: 'theme',
            listeners: {
                'select': function (combo, records) {
                   console.log(records[0].data.name);
                   params = new Object();
                   params.theme= records[0].data.id;
                   Ext.Ajax.request({
                          url: 'help/themeCrud',
                          method: 'POST',
                          params : params,
                          timeout: 1800000,
                          success: function(f, a) {
                                  var response = Ext.decode(f.responseText);
                                  if (response.success == true) {
                                     $theme = response.theme;
                                     console.log($theme);
                                     document.getElementById($theme).disabled = false;
                                     window.location.href=window.location.href;  
                                  }
                              }
                  });
                }
            }
        });     

    });
    </script>   
	</div>
	<div id="navigation">
		<a href="http://10.172.76.5/index.php/thumbnailmenu">A<sup>+</sup><font color="red">PLUS</font>::Wollo_University</a>
	</div>
	<div>
		<ul id="menu">		
					    <li id = "HOME">
		        <a href="#">HOME</a>		        
		        <ul>
		        			            <li><a href="http://10.172.76.5/index.php/thumbnailmenu">Thumbnail Menu</a></li>        
		            		            <li><a href="http://10.172.76.5/index.php/help">Help</a></li>        
		            		            <li><a href="http://10.172.76.5/index.php/personalinformation">Personal Information</a></li>        
		            		            <li><a href="http://10.172.76.5/index.php/dailylogs">Daily Logs</a></li>        
		            		            <li><a href="http://10.172.76.5/index.php/logout">Logout</a></li>        
		            		        </ul>
		    </li>
		    		    <li id = "Scheduling">
		        <a href="#">Scheduling</a>		        
		        <ul>
		        			            <li><a href="http://10.172.76.5/index.php/student_schedule">Student Schedule</a></li>        
		            		        </ul>
		    </li>
		    		    <li id = "Student">
		        <a href="#">Student</a>		        
		        <ul>
		        			            <li><a href="http://10.172.76.5/index.php/studentsgradingsheet">Grading Sheet</a></li>        
		            		            <li><a href="http://10.172.76.5/index.php/request_registration">Request for Registration</a></li>        
		            		            <li><a href="http://10.172.76.5/index.php/re_exam">Re-Exam Application</a></li>        
		            		            <li><a href="http://10.172.76.5/index.php/makeup_exam">Make-Up Exam Application</a></li>        
		            		            <li><a href="http://10.172.76.5/index.php/re_admission">Re-Admission Application</a></li>        
		            		            <li><a href="http://10.172.76.5/index.php/student_provision">Student Provision</a></li>        
		            		            <li><a href="http://10.172.76.5/index.php/modules">Course Modules</a></li>        
		            		        </ul>
		    </li>
		    		    <li id = "Faculty Evaluation">
		        <a href="#">Faculty Evaluation</a>		        
		        <ul>
		        			            <li><a href="http://10.172.76.5/index.php/evaluation_teacher">Evaluation Teacher</a></li>        
		            		        </ul>
		    </li>
		    		    <li id = "Library">
		        <a href="#">Library</a>		        
		        <ul>
		        			            <li><a href="http://10.172.76.5/index.php/library_book_opac">OPAC</a></li>        
		            		        </ul>
		    </li>
		    		    <li id = "Document">
		        <a href="#">Document</a>		        
		        <ul>
		        			            <li><a href="http://10.172.76.5/index.php/tutorial_student">Course Materials</a></li>        
		            		        </ul>
		    </li>
		    		    <li id = "Clinic">
		        <a href="#">Clinic</a>		        
		        <ul>
		        			            <li><a href="http://10.172.76.5/index.php/clinic_queue_request">Clinic Queue Request</a></li>        
		            		        </ul>
		    </li>
		    		</ul>    
	</div>

	<!--
	:::::::::: To determine if it is Student or not
	-->
	<input type="hidden" id="hdnItIS" name="hdnItIS" value=Student>
	<script type="text/javascript">
		if('0' == 1)
			var crudMaintenance = false;
		else 
			var crudMaintenance = true;

		var url = "/index.php/studentsgradingsheet";
        $(document).ready(function(){
            if(url == '/index.php/thumbnailmenu'){
               $("#Document").notify(
                 "Select Material for student, for Uploading educational material Here", { position:"top left",className: 'info' }
               );
            }
            
        });
	</script>
</body>
<footer>
	<div>
		A<sup>+</sup><font color="red">PLUS</font> &copy <script>document.write(new Date().getFullYear())</script> Developed by: <font class="footerLink"><a href="#">Wollo University - ICT Development Team</a></font>
	</div>
</footer>
</html>

<div id="innerdiv"></div>

<script type="text/javascript">	

	setTimeout("UpdateSessionData();", 0);
var query = null
  , id = 0;
function ExportDocs(type, reportType) {
    params = new Object();
    params.query = query;
    params.filetype = type;
    params.id = id;
    if (reportType == 'Course Registration') {
        params.department_id = null;
        params.batch_year = null;
        params.year_level = null;
        params.semester_id = null;
        params.section = null;
        params.status = null;
        params.reportType = reportType;
        ExportDocument('courseregistration_approval/exportdocument', params, type);
    } else
        ExportDocument('studentsgradingsheet/exportdocument', params, type);
}
Ext.onReady(function() {
    var treeStore = Ext.create('Ext.data.TreeStore', {
        proxy: {
            type: 'ajax',
            timeout: 1800000,
            reader: 'json',
            url: 'studentsgradingsheet/semestersattended'
        }
    });
    var RefreshTreeStore = function() {
        Ext.getCmp("semesterTree").getStore().reload({
            params: {
                reset: 1
            },
            timeout: 300000
        });
    };
    var tree = Ext.create('Ext.tree.Panel', {
        title: 'Attended Semesters',
        split: true,
        region: 'west',
        collapsible: true,
        id: 'semesterTree',
        store: treeStore,
        width: '20%',
        minWidth: 200,
        margin: '0 0 10 0',
        height: 500,
        rootVisible: false,
        viewConfig: {
            listeners: {
                itemclick: function(view, rec, item, index, eventObj) {
                    id = rec.get('id');
                    Ext.getCmp("courseListGrid").getStore().proxy.extraParams["id"] = rec.get('id');
                    RefreshGridStore();
                    numberfieldFlag = false;
                }
            }
        }
    });
    var storeCourseList = new Ext.data.JsonStore({
        proxy: {
            type: 'ajax',
            url: 'studentsgradingsheet/courselist',
            timeout: 1800000,
            extraParams: {
                id: 0
            },
            reader: {
                type: 'json',
                root: 'data',
                idProperty: 'id'
            }
        },
        listeners: {
            load: function(store, records, successful, eOpts) {
                Ext.getCmp("lblCgpa").setText('<b>0.00</b>', false);
                Ext.getCmp("lblSgpa").setText('<b>0.00</b>', false);
                Ext.getCmp("lblStatus").setText('<b>NA</b>', false);
                if (store.count() > 0) {
                    Ext.getCmp("lblCgpa").setText('<b>' + store.proxy.reader.jsonData.AcademicStatus[0].cgpa + '</b>', false);
                    Ext.getCmp("lblSgpa").setText('<b>' + store.proxy.reader.jsonData.AcademicStatus[0].sgpa + '</b>', false);
                    Ext.getCmp("lblStatus").setText('<b>' + store.proxy.reader.jsonData.AcademicStatus[0].status + '</b>', false);
                    Ext.getCmp("lblESCTS").setText('<b>' + store.proxy.reader.jsonData.AcademicStatus[0].totalCR + '</b>', false);
                    Ext.getCmp("lblGp").setText('<b>' + store.proxy.reader.jsonData.AcademicStatus[0].totalGP + '</b>', false);
                }
            }
        },
        fields: ['code', 'title','credit_hours', 'assignment', 'test1', 'test2', 'project', 'midterm', 'finalterm', 'grade_figure', 'grade_equivalent', 'name', 'grade_lastupdate', 'grade_status']
    });
    var RefreshGridStore = function() {
        Ext.getCmp("courseListGrid").getStore().reload({
            params: {
                reset: 1
            },
            timeout: 300000
        });
    };
    var grid = Ext.create('Ext.grid.Panel', {
        id: 'courseListGrid',
        region: 'center',
        store: storeCourseList,
        columns: [Ext.create('Ext.grid.RowNumberer'), {
            text: "Code",
            dataIndex: 'code',
            width: 90,
            renderer: addTooltip
        }, {
            text: "Title",
            dataIndex: 'title',
            width: 280,
            renderer: addTooltip
        },{
            text: "ESCTS",
            dataIndex: 'credit_hours',
            width: 50,
            renderer: addTooltip
        }, {
            text: "Assignment",
            dataIndex: 'assignment',
            width: 100,
            align: 'center'
        }, {
            text: "Test 1",
            dataIndex: 'test1',
            width: 60,
            align: 'center'
        }, {
            text: "Test 2",
            dataIndex: 'test2',
            width: 60,
            align: 'center'
        }, {
            text: "Project",
            dataIndex: 'project',
            width: 70,
            align: 'center'
        }, {
            text: "Midterm",
            dataIndex: 'midterm',
            width: 80,
            align: 'center'
        }, {
            text: "Finalterm",
            dataIndex: 'finalterm',
            width: 100,
            align: 'center'
        }, {
            text: "Grade",
            dataIndex: 'grade_figure',
            width: 80,
            align: 'center'
        }, {
            text: "EQ",
            dataIndex: 'grade_equivalent',
            width: 50,
            align: 'center'
        }, {
            text: "Instructor",
            dataIndex: 'name',
            width: 200,
            renderer: addTooltip
        }, {
            text: "Date Posted",
            dataIndex: 'grade_lastupdate',
            width: 100,
            renderer: addTooltip
        }, {
            text: "Status",
            dataIndex: 'grade_status',
            width: 100
        }, ],
        columnLines: true,
        width: '80%',
        minWidth: 700,
        height: 400,
        title: 'Course List',
        loadMask: true,
        margin: '0 0 10 0',
        tbar: [{
            xtype: 'tbfill'
        }, {
            text: 'Group',
            icon: '../image/view.png',
            tooltip: 'View students by group',
            handler: function() {
                group(id);
            }
        },{
            text: 'Download',
            icon: '../image/download.png',
            tooltip: 'Extract Data to PDF or EXCEL File Format',
            menu: {
                items: [{
                    text: 'Grade Report',
                    id: 'exportPDF',
                    disabled: false,
                    icon: '../image/pdf.png',
                    handler: function() {
                        ExportDocs('PDF', 'Grade Report');
                    }
                }, {
                    text: 'Course Registration',
                    icon: '../image/pdf.png',
                    handler: function() {
                        ExportDocs('PDF', 'Course Registration');
                    }
                }, {
                    text: 'Export Excel',
                    id: 'exportExcel',
                    disabled: false,
                    hidden: true,
                    icon: '../image/excel.png',
                    handler: function() {
                        ExportDocs('Excel', 'Export Excel');
                    }
                }]
            }
        }],
        bbar: [{
            xtype: 'label',
            html: 'Semester GPA: '
        }, {
            xtype: 'label',
            id: 'lblSgpa',
            html: '<b>0.00</b>'
        }, '-', {
            xtype: 'label',
            html: 'Cumulative GPA: '
        }, {
            xtype: 'label',
            id: 'lblCgpa',
            html: '<b>0.00</b>'
        }, '-', {
            xtype: 'label',
            html: 'Status: '
        }, {
            xtype: 'label',
            id: 'lblStatus',
            html: '<b>NA</b>'
        }, '-', {
            xtype: 'label',
            html: 'Total ESCTS: '
        }, {
            xtype: 'label',
            id: 'lblESCTS',
            html: '<b>NA</b>'
        }, '-', {
            xtype: 'label',
            html: 'Total Grade Point: '
        }, {
            xtype: 'label',
            id: 'lblGp',
            html: '<b>NA</b>'
        }]
    });
    Ext.create('Ext.panel.Panel', {
        title: 'Grading Sheet',
        width: '100%',
        height: sheight,
        renderTo: "innerdiv",
        layout: 'border',
        border: false,
        items: [tree, grid]
    });
});
	function ViewGradeScale() {Ext.Ajax.request({url     :"gradingscale/scaledetaillist", method  : 'POST', params: {scaleID: gradescaleId, type: 'html'}, success: function(f,a) {var response = Ext.decode(f.responseText); if (response.success == true) {var htmlData = '<table width="100%" style="background: #ff6666;border: solid 1px white;">' + '<tr style="background: #ff6666;">' + '<td colspan="4" style="padding: 2px;" width="100%"><font color=white size=2></font></td>' + '</tr>'; htmlData += '<tr >' + '<td align="center" style="background: #ffbec2; padding: 2px;" width="3%"><font color=black size=2>No.</td>' + '<td align="center" style="background: #ffbec2; padding: 2px;" width="30%"><font color=black size=2>Range</td>' + '<td align="center" style="background: #ffbec2; padding: 2px;" width="30%"><font color=black size=2>Equivalent</td>' + '<td align="center" style="background: #ffbec2; padding: 2px;" width="36%"><font color=black size=2>Remarks</td>' + '</tr>'; for (var i = 0; i < response.count; i++) {htmlData += '<tr >' + '<td align="center" style="background: #ffd9d9; padding: 2px;"><font color=black size=2>'+(i+1)+'.</td>' + '<td align="center" style="background: #ffd9d9; padding: 2px;"><font color=black size=2>'+response.data[i].range+'</td>' + '<td align="center" style="background: #ffd9d9; padding: 2px;"><font color=black size=2>'+response.data[i].equivalent+'</td>' + '<td align="center" style="background: #ffd9d9; padding: 2px;"><font color=black size=2>'+response.data[i].remarks+'</td>' + '</tr>'; }; htmlData += '</table>'; var htmlLoad = new Ext.XTemplate(htmlData); mainWindow = Ext.create('Ext.window.Window', {title       : 'Grading Scale', closable    : true, modal       : true, width       : 300, autoHeight  : true, resizable   : false, html: htmlLoad.applyTemplate(null), }).show(); } else errorFunction("Error!",response.data); } }); }	setTimeout("UpdateSessionData();", 0);
var query = null
  , gradescaleId = 0
  , numberfieldFlag = false
  , gradeFieldReadOnly = false
  , courseID = 0;

;function GenerateGroup(type) {
    params = new Object();
    params.course_id = courseID;
    params.type = type;
    deleteFunction('student_grouping/autoGroup', params, 'StudentListGroup', null);
    
    Ext.getCmp("pageToolbar").moveFirst();
}
function group(course_id) {

    var storeStudentList = new Ext.data.JsonStore({
        proxy: {
            type: 'ajax',
            url: 'student_grouping/groupedStudent',
            timeout: 1800000,
            extraParams: {
                id: course_id
            },
            reader: {
                type: 'json',
                root: 'data',
                idProperty: 'id'
            }
        },
        listeners: {
            load: function(store, records, successful, eOpts) {
                
            }
        },
        fields: [{
            name: 'id',
            type: 'int'
        }, 'cgpa','id','group_name', 'group_no','student_id','student_name', 'sex', 'status', 'status_style','mobile_no'],
         groupField: 'group_no',
         remoteGroup:true
    });
    var RefreshGridStore = function() {
        Ext.getCmp("StudentListGroup").getStore().reload({
            params: {
                reset: 1
            },
            timeout: 300000
        });
    };

    var grid = Ext.create('Ext.grid.Panel', {
        id: 'StudentListGroup',
        region: 'center',
        store: storeStudentList,
        features: [{
            id: 'group',
            ftype: 'grouping',
            groupHeaderTpl: '{name}'
        }],
        columns: [Ext.create('Ext.grid.RowNumberer'), {
            dataIndex: 'id',
            hidden: true
        },{
            text: "ID",
            dataIndex: 'student_id',
            width: 120
        }, {
            text: "Name",
            dataIndex: 'student_name',
            width: 230
        }, {
            text: "Sex",
            dataIndex: 'sex',
            align: 'center',
            width: 80,
        }, {
            text: "Phone",
            dataIndex: 'mobile_no',
            align: 'center',
            width: 100,
        },{
            text: "Group Name",
            dataIndex: 'group_name',
            align: 'center',
            width: 100,
        },{
            text: "Status",
            dataIndex: 'status_style',
            width: 120
        }],
        viewConfig: {
            listeners: {
                itemcontextmenu: function(view, record, item, index, e) {
                    e.stopEvent();
                    rowGridMenu.showAt(e.getXY());
                }
            }
        },
        columnLines: true,
        width: '100%',
        minWidth: 700,
        height: 450,
        autoScroll: true,
        title: 'Grouped Student List',
        margin: '0 0 10 0',
        tbar: [{
            xtype: 'tbfill'
        }
        ]
    });
    
    groupingWindow = Ext.create('Ext.window.Window', {
        title: 'Grouping Students By Academic Rank',
        closable: true,
        modal: true,
        width: 800,
        height: 500,
        resizable: false,
        buttonAlign: 'center',
        header: {
            titleAlign: 'center'
        },
        items: [grid]
    });
    RefreshGridStore();
    groupingWindow.show();
}
	
</script>
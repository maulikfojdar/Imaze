<script>
				
				var editorIntroduction = new YAHOO.widget.SimpleEditor('event_intro', {
				height: '200px',
				width: '100%',
				dompath: false,
				animate: true,
				handleSubmit: true,
				toolbar: {
					collapse: true,
					draggable: false,
					buttons: [
						{ group: 'textstyle', label: 'Font Style',
							buttons: [
								{ type: 'push', label: 'Bold CTRL + SHIFT + B', value: 'bold' },
								{ type: 'push', label: 'Italic CTRL + SHIFT + I', value: 'italic' },
								{ type: 'push', label: 'Underline CTRL + SHIFT + U', value: 'underline' },
							]
						},
						{ type: 'separator' },
						{ group: 'indentlist', label: 'Lists',
							buttons: [
								{ type: 'push', label: 'Create an Unordered List', value: 'insertunorderedlist' },
								{ type: 'push', label: 'Create an Ordered List', value: 'insertorderedlist' }
							]
						},
						{ type: 'separator' },
						{ group: 'insertitem', label: 'Insert Item',
							buttons: [
								{ type: 'push', label: 'HTML Link CTRL + SHIFT + L', value: 'createlink', disabled: true },
								{ type: 'push', label: 'Insert Image', value: 'insertimage' }
							]
						}
					]
			
				}
			});
			var editorDetails = new YAHOO.widget.SimpleEditor('event_details', {
				height: '200px',
				width: '100%',
				dompath: false,
				animate: true,
				handleSubmit: true,
				toolbar: {
					collapse: true,
					draggable: false,
					buttons: [
						{ group: 'textstyle', label: 'Font Style',
							buttons: [
								{ type: 'push', label: 'Bold CTRL + SHIFT + B', value: 'bold' },
								{ type: 'push', label: 'Italic CTRL + SHIFT + I', value: 'italic' },
								{ type: 'push', label: 'Underline CTRL + SHIFT + U', value: 'underline' },
							]
						},
						{ type: 'separator' },
						{ group: 'indentlist', label: 'Lists',
							buttons: [
								{ type: 'push', label: 'Create an Unordered List', value: 'insertunorderedlist' },
								{ type: 'push', label: 'Create an Ordered List', value: 'insertorderedlist' }
							]
						},
						{ type: 'separator' },
						{ group: 'insertitem', label: 'Insert Item',
							buttons: [
								{ type: 'push', label: 'HTML Link CTRL + SHIFT + L', value: 'createlink', disabled: true },
								{ type: 'push', label: 'Insert Image', value: 'insertimage' }
							]
						}
					]
			
				}
			});
			var editorRules = new YAHOO.widget.SimpleEditor('event_rules', {
				height: '200px',
				width: '100%',
				dompath: false,
				animate: true,
				handleSubmit: true,
				toolbar: {
					collapse: true,
					draggable: false,
					buttons: [
						{ group: 'textstyle', label: 'Font Style',
							buttons: [
								{ type: 'push', label: 'Bold CTRL + SHIFT + B', value: 'bold' },
								{ type: 'push', label: 'Italic CTRL + SHIFT + I', value: 'italic' },
								{ type: 'push', label: 'Underline CTRL + SHIFT + U', value: 'underline' },
							]
						},
						{ type: 'separator' },
						{ group: 'indentlist', label: 'Lists',
							buttons: [
								{ type: 'push', label: 'Create an Unordered List', value: 'insertunorderedlist' },
								{ type: 'push', label: 'Create an Ordered List', value: 'insertorderedlist' }
							]
						},
						{ type: 'separator' },
						{ group: 'insertitem', label: 'Insert Item',
							buttons: [
								{ type: 'push', label: 'HTML Link CTRL + SHIFT + L', value: 'createlink', disabled: true },
								{ type: 'push', label: 'Insert Image', value: 'insertimage' }
							]
						}
					]
			
				}
			});
			var editorJudgingcriteria = new YAHOO.widget.SimpleEditor('event_judgincrit', {
				height: '200px',
				width: '100%',
				dompath: false,
				animate: true,
				handleSubmit: true,
				toolbar: {
					collapse: true,
					draggable: false,
					buttons: [
						{ group: 'textstyle', label: 'Font Style',
							buttons: [
								{ type: 'push', label: 'Bold CTRL + SHIFT + B', value: 'bold' },
								{ type: 'push', label: 'Italic CTRL + SHIFT + I', value: 'italic' },
								{ type: 'push', label: 'Underline CTRL + SHIFT + U', value: 'underline' },
							]
						},
						{ type: 'separator' },
						{ group: 'indentlist', label: 'Lists',
							buttons: [
								{ type: 'push', label: 'Create an Unordered List', value: 'insertunorderedlist' },
								{ type: 'push', label: 'Create an Ordered List', value: 'insertorderedlist' }
							]
						},
						{ type: 'separator' },
						{ group: 'insertitem', label: 'Insert Item',
							buttons: [
								{ type: 'push', label: 'HTML Link CTRL + SHIFT + L', value: 'createlink', disabled: true },
								{ type: 'push', label: 'Insert Image', value: 'insertimage' }
							]
						}
					]
			
				}
			});
			
		
		editorIntroduction.render();
		editorDetails.render();
		editorRules.render();
		editorJudgingcriteria.render();
			
		</script>

<div id="form_wrapper">
	<form id="eventForm" method="post" action="include/submitEvent.php" >
    				                                    
                    <p>BRANCH NAME (TO BE SHOWN ON SITE)</p>
                    <input type="text" name="branch_name" maxlength="20"/>
                                                       
                    <p>EVENT NAME (TO BE SHOWN ON SITE)</p>
                    <input type="text" name="event_name" />
                    
                    <p>EVENT TYPE</p>
                    <select name="event_type" >
                    	<option value="INDIVIDUAL">INDIVIDUAL</option>
                        <option value="TEAM">TEAM</option>                        
                   	</select>
                    
                    <p>MAX PARTICIPENT PER TEAM</p>
                    <select name="max_part" >
                    	<option value="1">1</option>
                        <option value="2">2</option>                        
                        <option value="3">3</option>                        
                        <option value="4">4</option>                        
                        <option value="5">5</option>                        
                   	</select>
                    
                    <p>MAX ENTRIES FOR YOUR EVENT</p>
                    <input type="text" name="max_entry" />
                    
                    <p>EVENT TYPE</p>
                    <select name="event_category" >
                    	<option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                    </select>
		            <p>INTRODUCTION</p>
                    <textarea id="event_intro" name="event_intro"></textarea>
                    <p>DETAILS</p>
                    <textarea id="event_details" name="event_details"></textarea>
                    <p>RULES</p>
                    <textarea id="event_rules" name="event_rules"></textarea>
                    <p>JUDGING CRITERIA</p>
                    <textarea id="event_judgincrit" name="event_judgincrit"></textarea>
                    <br/>
                    <input type="submit" value="Submit Event" name="Submit Event" />
     </form>
</div>

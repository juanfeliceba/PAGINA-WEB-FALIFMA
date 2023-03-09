try  {  var sid_34296;  var frm_3;  var pid = 37492552; var orig_cat_1341452863; var cbar_fltr = 0; var marker_0_set; var cbar_update_products_V2;  var cbar_filter_from_p=776164428;  var cbar_f=776164428; var CAT_OUT1341452863; var cbar_cid_final = 1341452863;  cbarSetPreviewRuleIds([16081, 18833]);  cbar_log_console('cbar rule 16081 triggered');  cbarApp.ruleVariations[16081] = 0;  var rule_HI;  cbar_log_console('cbar rule 18833 triggered');  cbarApp.ruleVariations[18833] = 0;  cbar_results = []; cbar_subproducts = []; cbar_results[0] = []; cbar_subproducts[0] = []; cbar_results[1] = []; cbar_subproducts[1] = [];  cbar_data_returned();  var writing_to='user_db_data_34296_4440163348162' ;  if (typeof cbar_restore_checkboxes =='function') cbar_restore_checkboxes();  var marker1_891_ms;  var cbar_ts = 1933;  var cm2 = 892568;  var cbar_sip = '10.0.0.210';  cbarApp.delayed.run(0);  if (cbar_shortlist_show && (typeof cbar_shortlist === 'function')) { cbar_shortlist(); }  cbar_firecustomevent('cbar_pageview_complete', document);  if ((typeof cbar_completed === 'function') && (typeof window.cbar_completed_run === 'undefined')) {
				window.cbar_completed_run = true; 
				cbar_completed(); 
			} } catch(err) { 
			window.console && console.log('datajs error: ' + err.message); 
			setTimeout(function() { 
				cbar_log_error('datajs error: ' + err.message, err.stack);
			}, 1000);  
		}
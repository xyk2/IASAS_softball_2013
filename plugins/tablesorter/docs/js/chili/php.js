/*
===============================================================================
Chili is the jquery code highlighter plugin
...............................................................................
                                               Copyright 2007 / Andrea Ercolino
-------------------------------------------------------------------------------
LICENSE: http://www.opensource.org/licenses/mit-license.php
WEBSITE: http://noteslog.com/chili/
===============================================================================
*/

/* "These lists are neither exhaustive or complete" (quote from the PHP Manual) */
{
	steps: {
		  mlcom   : { exp: /\/\*[^*]*\*+([^\/][^*]*\*+)*\// }
		, com     : { exp: /(?:\/\/.*)|(?:[^\\]\#.*)/ }
		, string1 : { exp: /\'[^\'\\]*(?:\\.[^\'\\]*)*\'/ }
		, string2 : { exp: /\"[^\"\\]*(?:\\.[^\"\\]*)*\"/ }
		, value   : { exp: /\b(?:[Nn][Uu][Ll][Ll]|[Tt][Rr][Uu][Ee]|[Ff][Aa][Ll][Ss][Ee])\b/ }
		, number  : { exp: /\b[+-]?(\d*\.?\d+|\d+\.?\d*)([eE][+-]?\d+)?\b/ }
		, const1  : { exp: /\b(?:DEFAULT_INCLUDE_PATH|E_(?:ALL|CO(?:MPILE_(?:ERROR|WARNING)|RE_(?:ERROR|WARNING))|ERROR|NOTICE|PARSE|STRICT|USER_(?:ERROR|NOTICE|WARNING)|WARNING)|P(?:EAR_(?:EXTENSION_DIR|INSTALL_DIR)|HP_(?:BINDIR|CONFIG_FILE_(?:PATH|SCAN_DIR)|DATADIR|E(?:OL|XTENSION_DIR)|INT_(?:MAX|SIZE)|L(?:IBDIR|OCALSTATEDIR)|O(?:S|UTPUT_HANDLER_(?:CONT|END|START))|PREFIX|S(?:API|HLIB_SUFFIX|YSCONFDIR)|VERSION))|__COMPILER_HALT_OFFSET__)\b/ }
		, const2  : { exp: /\b(?:A(?:B(?:DAY_(?:1|2|3|4|5|6|7)|MON_(?:1(?:0|1|2|)|2|3|4|5|6|7|8|9))|LT_DIGITS|M_STR|SSERT_(?:ACTIVE|BAIL|CALLBACK|QUIET_EVAL|WARNING))|C(?:ASE_(?:LOWER|UPPER)|HAR_MAX|O(?:DESET|NNECTION_(?:ABORTED|NORMAL|TIMEOUT)|UNT_(?:NORMAL|RECURSIVE))|R(?:EDITS_(?:ALL|DOCS|FULLPAGE|G(?:ENERAL|ROUP)|MODULES|QA|SAPI)|NCYSTR|YPT_(?:BLOWFISH|EXT_DES|MD5|S(?:ALT_LENGTH|TD_DES)))|URRENCY_SYMBOL)|D(?:AY_(?:1|2|3|4|5|6|7)|ECIMAL_POINT|IRECTORY_SEPARATOR|_(?:FMT|T_FMT))|E(?:NT_(?:COMPAT|NOQUOTES|QUOTES)|RA(?:_(?:D_(?:FMT|T_FMT)|T_FMT|YEAR)|)|XTR_(?:IF_EXISTS|OVERWRITE|PREFIX_(?:ALL|I(?:F_EXISTS|NVALID)|SAME)|SKIP))|FRAC_DIGITS|GROUPING|HTML_(?:ENTITIES|SPECIALCHARS)|IN(?:FO_(?:ALL|C(?:ONFIGURATION|REDITS)|ENVIRONMENT|GENERAL|LICENSE|MODULES|VARIABLES)|I_(?:ALL|PERDIR|SYSTEM|USER)|T_(?:CURR_SYMBOL|FRAC_DIGITS))|L(?:C_(?:ALL|C(?:OLLATE|TYPE)|M(?:ESSAGES|ONETARY)|NUMERIC|TIME)|O(?:CK_(?:EX|NB|SH|UN)|G_(?:A(?:LERT|UTH(?:PRIV|))|C(?:ONS|R(?:IT|ON))|D(?:AEMON|EBUG)|E(?:MERG|RR)|INFO|KERN|L(?:OCAL(?:0|1|2|3|4|5|6|7)|PR)|MAIL|N(?:DELAY|EWS|O(?:TICE|WAIT))|ODELAY|P(?:ERROR|ID)|SYSLOG|U(?:SER|UCP)|WARNING)))|M(?:ON_(?:1(?:0|1|2|)|2|3|4|5|6|7|8|9|DECIMAL_POINT|GROUPING|THOUSANDS_SEP)|_(?:1_PI|2_(?:PI|SQRTPI)|E|L(?:N(?:10|2)|OG(?:10E|2E))|PI(?:_(?:2|4)|)|SQRT(?:1_2|2)))|N(?:EGATIVE_SIGN|O(?:EXPR|STR)|_(?:CS_PRECEDES|S(?:EP_BY_SPACE|IGN_POSN)))|P(?:ATH(?:INFO_(?:BASENAME|DIRNAME|EXTENSION)|_SEPARATOR)|M_STR|OSITIVE_SIGN|_(?:CS_PRECEDES|S(?:EP_BY_SPACE|IGN_POSN)))|RADIXCHAR|S(?:EEK_(?:CUR|END|SET)|ORT_(?:ASC|DESC|NUMERIC|REGULAR|STRING)|TR_PAD_(?:BOTH|LEFT|RIGHT))|T(?:HOUS(?:ANDS_SEP|EP)|_FMT(?:_AMPM|))|YES(?:EXPR|STR))\b/ }
		, global  : { exp: /(?:\$GLOBALS|\$_COOKIE|\$_ENV|\$_FILES|\$_GET|\$_POST|\$_REQUEST|\$_SERVER|\$_SESSION|\$php_errormsg)\b/ }
		, keyword : { exp: /\b(?:__CLASS__|__FILE__|__FUNCTION__|__LINE__|__METHOD__|abstract|and|array|as|break|case|catch|cfunction|class|clone|const|continue|declare|default|die|do|echo|else|elseif|empty|enddeclare|endfor|endforeach|endif|endswitch|endwhile|eval|exception|exit|extends|extends|final|for|foreach|function|global|if|implements|include|include_once|interface|isset|list|new|old_function|or|php_user_filter|print|private|protected|public|require|require_once|return|static|switch|this|throw|try|unset|use|var|while|xor)\b/ }
		, variable: { exp: /\$(\w+)/
			, replacement: '<span class="keyword">$</span><span class="variable">$1</span>' }
		, heredoc : { exp: /(\<\<\<\s*)(\w+)((?:(?!\2).*\n)+)(\2)\b/
			, replacement: '<span class="keyword">$1</span><span class="string1">$2</span><span class="string2">$3</span><span class="string1">$4</span>' }
		, func    : { exp: "\\b(?:a(?:bs|cos(?:h|)|dd(?:cslashes|slashes)|ggregat(?:e(?:_(?:info|methods(?:_by_(?:list|regexp)|)|properties(?:_by_(?:list|regexp)|))|)|ion_info)|p(?:ache_(?:child_terminate|get(?:_(?:modules|version)|env)|lookup_uri|note|re(?:quest_headers|s(?:et_timeout|ponse_headers))|setenv)|d_(?:breakpoint|c(?:allstack|lunk|ontinue|roak)|dump_(?:function_table|persistent_resources|regular_resources)|echo|get_active_symbols|set_(?:pprof_trace|s(?:ession(?:_trace|)|ocket_session_trace))))|r(?:ray_(?:c(?:h(?:ange_key_case|unk)|o(?:mbine|unt_values))|diff(?:_(?:assoc|key|u(?:assoc|key))|)|f(?:il(?:l|ter)|lip)|intersect(?:_(?:assoc|key|u(?:assoc|key))|)|key(?:_exists|s)|m(?:ap|erge(?:_recursive|)|ultisort)|p(?:ad|op|ush)|r(?:and|e(?:duce|verse))|s(?:earch|hift|lice|plice|um)|u(?:diff(?:_(?:assoc|uassoc)|)|intersect(?:_(?:assoc|uassoc)|)|n(?:ique|shift))|values|walk(?:_recursive|))|sort)|s(?:cii2ebcdic|in(?:h|)|ort|pell_(?:check(?:_raw|)|new|suggest)|sert(?:_options|))|tan(?:2|h|))|b(?:ase(?:64_(?:decode|encode)|_convert|name)|c(?:add|comp|div|m(?:od|ul)|ompile(?:_write_file|r_(?:load(?:_exe|)|parse_class|read|write_(?:c(?:lass|onstant)|exe_footer|f(?:ooter|unction(?:s_from_file|))|header)))|pow(?:mod|)|s(?:cale|qrt|ub))|in(?:2hex|d(?:_textdomain_codeset|ec|textdomain))|z(?:c(?:lose|ompress)|decompress|err(?:no|or|str)|flush|open|read|write))|c(?:al(?:_(?:days_in_month|from_jd|info|to_jd)|l_user_(?:func(?:_array|)|method(?:_array|)))|cvs_(?:a(?:dd|uth)|co(?:mmand|unt)|d(?:elete|one)|init|lookup|new|re(?:port|turn|verse)|s(?:ale|tatus)|textvalue|void)|eil|h(?:dir|eckd(?:ate|nsrr)|grp|mod|o(?:p|wn)|r(?:oot|)|unk_split)|l(?:ass(?:_(?:exists|implements|parents)|kit_(?:import|method_(?:add|copy|re(?:define|move|name))))|earstatcache|ose(?:dir|log))|o(?:m(?:_(?:addref|create_guid|event_sink|get(?:_active_object|)|i(?:nvoke|senum)|load(?:_typelib|)|message_pump|pr(?:int_typeinfo|op(?:get|put|set))|release|set)|pact|)|n(?:nection_(?:aborted|status|timeout)|stant|vert_(?:cyr_string|uu(?:decode|encode)))|py|s(?:h|)|unt(?:_chars|))|pdf_(?:a(?:dd_(?:annotation|outline)|rc)|begin_text|c(?:ircle|l(?:ip|ose(?:path(?:_(?:fill_stroke|stroke)|)|))|ontinue_text|urveto)|end_text|fi(?:ll(?:_stroke|)|nalize(?:_page|))|global_set_document_limits|import_jpeg|lineto|moveto|newpath|o(?:pen|utput_buffer)|p(?:age_init|lace_inline_image)|r(?:e(?:ct|store)|lineto|moveto|otate(?:_text|))|s(?:ave(?:_to_file|)|cale|et(?:_(?:action_url|c(?:har_spacing|reator|urrent_page)|font(?:_(?:directories|map_file)|)|horiz_scaling|keywords|leading|page_animation|subject|t(?:ext_(?:matrix|pos|r(?:endering|ise))|itle)|viewer_preferences|word_spacing)|dash|flat|gray(?:_(?:fill|stroke)|)|line(?:cap|join|width)|miterlimit|rgbcolor(?:_(?:fill|stroke)|))|how(?:_xy|)|tr(?:ingwidth|oke))|t(?:ext|ranslate))|r(?:ack_(?:c(?:heck|losedict)|getlastmessage|opendict)|c32|eate_function|ypt)|type_(?:al(?:num|pha)|cntrl|digit|graph|lower|p(?:rint|unct)|space|upper|xdigit)|ur(?:l_(?:c(?:lose|opy_handle)|e(?:rr(?:no|or)|xec)|getinfo|init|multi_(?:add_handle|close|exec|getcontent|in(?:fo_read|it)|remove_handle|select)|setopt|version)|rent)|y(?:bercash_(?:base64_(?:decode|encode)|decr|encr)|rus_(?:authenticate|bind|c(?:lose|onnect)|query|unbind)))|d(?:ate(?:_sun(?:rise|set)|)|b(?:a(?:_(?:close|delete|exists|f(?:etch|irstkey)|handlers|insert|key_split|list|nextkey|op(?:en|timize)|popen|replace|sync)|se_(?:add_record|c(?:lose|reate)|delete_record|get_(?:header_info|record(?:_with_names|))|num(?:fields|records)|open|pack|replace_record))|list|m(?:close|delete|exists|f(?:etch|irstkey)|insert|nextkey|open|replace)|plus_(?:a(?:dd|ql)|c(?:hdir|lose|urr)|err(?:code|no)|f(?:i(?:nd|rst)|lush|ree(?:alllocks|lock|rlocks))|get(?:lock|unique)|info|l(?:ast|ockrel)|next|open|prev|r(?:c(?:hperm|r(?:eate|t(?:exact|like)))|es(?:olve|torepos)|keys|open|query|rename|secindex|unlink|zap)|s(?:avepos|etindex(?:bynumber|)|ql)|t(?:cl|remove)|u(?:n(?:do(?:prepare|)|lockrel|select)|pdate)|x(?:lockrel|unlockrel))|x_(?:c(?:lose|o(?:mpare|nnect))|e(?:rror|scape_string)|fetch_row|query|sort))|c(?:gettext|ngettext)|e(?:aggregate|bug(?:_(?:backtrace|print_backtrace|zval_dump)|ger_o(?:ff|n))|c(?:bin|hex|oct)|fine(?:_syslog_variables|d|)|g2rad|lete)|gettext|i(?:o_(?:close|fcntl|open|read|s(?:eek|tat)|t(?:csetattr|runcate)|write)|r(?:name|)|sk(?:_(?:free_space|total_space)|freespace))|l|n(?:gettext|s_(?:check_record|get_(?:mx|record)))|o(?:m(?:_import_simplexml|xml_(?:new_doc|open_(?:file|mem)|version|x(?:mltree|slt_stylesheet(?:_(?:doc|file)|))))|tnet(?:_load|)|ubleval))|e(?:a(?:ch|ster_da(?:te|ys))|bcdic2ascii|nd|r(?:eg(?:_replace|i(?:_replace|)|)|ror_(?:log|reporting))|scapeshell(?:arg|cmd)|x(?:ec|if_(?:imagetype|read_data|t(?:agname|humbnail))|p(?:lode|m1|)|t(?:ension_loaded|ract))|zmlm_hash)|f(?:am_(?:c(?:ancel_monitor|lose)|monitor_(?:collection|directory|file)|next_event|open|pending|resume_monitor|suspend_monitor)|bsql_(?:a(?:ffected_rows|utocommit)|blob_size|c(?:hange_user|lo(?:b_size|se)|o(?:mmit|nnect)|reate_(?:blob|clob|db))|d(?:ata(?:_seek|base(?:_password|))|b_(?:query|status)|rop_db)|err(?:no|or)|f(?:etch_(?:a(?:rray|ssoc)|field|lengths|object|row)|ield_(?:flags|len|name|seek|t(?:able|ype))|ree_result)|get_autostart_info|hostname|insert_id|list_(?:dbs|fields|tables)|n(?:ext_result|um_(?:fields|rows))|p(?:assword|connect)|query|r(?:e(?:ad_(?:blob|clob)|sult)|ollback)|s(?:e(?:lect_db|t_(?:lob_mode|password|transaction))|t(?:art_db|op_db))|tablename|username|warnings)|close|df_(?:add_(?:doc_javascript|template)|c(?:lose|reate)|e(?:num_values|rr(?:no|or))|get_(?:a(?:p|ttachment)|encoding|f(?:ile|lags)|opt|status|v(?:alue|ersion))|header|next_field_name|open(?:_string|)|remove_item|s(?:ave(?:_string|)|et_(?:ap|encoding|f(?:ile|lags)|javascript_action|o(?:n_import_javascript|pt)|s(?:tatus|ubmit_form_action)|target_frame|v(?:alue|ersion))))|eof|flush|get(?:c(?:sv|)|s(?:s|))|ile(?:_(?:exists|get_contents|put_contents)|atime|ctime|group|inode|mtime|owner|p(?:erms|ro(?:_(?:field(?:count|name|type|width)|r(?:etrieve|owcount))|))|size|type|)|l(?:o(?:atval|ck|or)|ush)|mod|nmatch|open|p(?:assthru|rintf|ut(?:csv|s))|r(?:e(?:ad|nchtojd)|ibidi_log2vis)|s(?:canf|eek|ockopen|tat)|t(?:ell|ok|p_(?:alloc|c(?:dup|h(?:dir|mod)|lose|onnect)|delete|exec|f(?:get|put)|get(?:_option|)|login|m(?:dtm|kdir)|n(?:b_(?:continue|f(?:get|put)|get|put)|list)|p(?:asv|ut|wd)|quit|r(?:aw(?:list|)|ename|mdir)|s(?:et_option|i(?:te|ze)|sl_connect|ystype))|runcate)|unc(?:_(?:get_arg(?:s|)|num_args)|tion_exists)|write)|g(?:d_info|et(?:_(?:browser|c(?:fg_var|lass(?:_(?:methods|vars)|)|urrent_user)|de(?:clared_(?:classes|interfaces)|fined_(?:constants|functions|vars))|extension_funcs|h(?:eaders|tml_translation_table)|include(?:_path|d_files)|loaded_extensions|m(?:agic_quotes_(?:gpc|runtime)|eta_tags)|object_vars|parent_class|re(?:quired_files|source_type))|allheaders|cwd|date|env|hostby(?:addr|name(?:l|))|imagesize|lastmod|m(?:xrr|y(?:gid|inode|pid|uid))|opt|protobyn(?:ame|umber)|r(?:andmax|usage)|servby(?:name|port)|t(?:ext|imeofday|ype))|lob|m(?:date|mktime|p_(?:a(?:bs|dd|nd)|c(?:lrbit|mp|om)|div(?:_(?:q(?:r|)|r)|exact|)|fact|gcd(?:ext|)|hamdist|in(?:it|tval|vert)|jacobi|legendre|m(?:od|ul)|neg|or|p(?:erfect_square|o(?:pcount|w(?:m|))|rob_prime)|random|s(?:can(?:0|1)|etbit|ign|qrt(?:rem|)|trval|ub)|xor)|strftime)|regoriantojd|z(?:c(?:lose|ompress)|deflate|e(?:ncode|of)|file|get(?:c|s(?:s|))|inflate|open|p(?:assthru|uts)|re(?:ad|wind)|seek|tell|uncompress|write))|h(?:e(?:ader(?:s_(?:list|sent)|)|brev(?:c|)|xdec)|ighlight_(?:file|string)|t(?:ml(?:_entity_decode|entities|specialchars)|tp_build_query)|w(?:_(?:a(?:pi_(?:attribute|content|object)|rray2objrec)|c(?:h(?:angeobject|ildren(?:obj|))|lose|onnect(?:ion_info|)|p)|d(?:eleteobject|oc(?:byanchor(?:obj|)|ument_(?:attributes|bodytag|content|s(?:etcontent|ize)))|ummy)|e(?:dittext|rror(?:msg|))|free_document|get(?:an(?:chors(?:obj|)|dlock)|child(?:coll(?:obj|)|doccoll(?:obj|))|object(?:byquery(?:coll(?:obj|)|obj|)|)|parents(?:obj|)|re(?:llink|mote(?:children|))|srcbydestobj|text|username)|i(?:dentify|n(?:collections|fo|s(?:coll|doc|ert(?:anchors|document|object))))|m(?:apid|odifyobject|v)|new_document|o(?:bjrec2array|utput_document)|p(?:connect|ipedocument)|root|s(?:etlinkroot|tat)|unlock|who)|api_hgcsp)|ypot)|i(?:base_(?:a(?:dd_user|ffected_rows)|b(?:ackup|lob_(?:add|c(?:ancel|lose|reate)|echo|get|i(?:mport|nfo)|open))|c(?:lose|o(?:mmit(?:_ret|)|nnect))|d(?:b_info|elete_user|rop_db)|e(?:rr(?:code|msg)|xecute)|f(?:etch_(?:assoc|object|row)|ield_info|ree_(?:event_handler|query|result))|gen_id|m(?:aintain_db|odify_user)|n(?:ame_result|um_(?:fields|params))|p(?:aram_info|connect|repare)|query|r(?:estore|ollback(?:_ret|))|se(?:rv(?:er_info|ice_(?:attach|detach))|t_event_handler)|t(?:imefmt|rans)|wait_event)|conv(?:_(?:get_encoding|mime_(?:decode(?:_headers|)|encode)|s(?:et_encoding|tr(?:len|pos|rpos)|ubstr))|)|d(?:3_(?:get_(?:frame_(?:long_name|short_name)|genre_(?:id|list|name)|tag|version)|remove_tag|set_tag)|ate)|fx(?:_(?:affected_rows|b(?:lobinfile_mode|yteasvarchar)|c(?:lose|o(?:nnect|py_blob)|reate_(?:blob|char))|do|error(?:msg|)|f(?:etch_row|ield(?:properties|types)|ree_(?:blob|char|result))|get(?:_(?:blob|char)|sqlca)|htmltbl_result|nu(?:llformat|m_(?:fields|rows))|p(?:connect|repare)|query|textasvarchar|update_(?:blob|char))|us_(?:c(?:lose_slob|reate_slob)|free_slob|open_slob|read_slob|seek_slob|tell_slob|write_slob))|gnore_user_abort|m(?:a(?:ge(?:2wbmp|_type_to_(?:extension|mime_type)|a(?:lphablending|ntialias|rc)|c(?:har(?:up|)|o(?:lor(?:a(?:llocate(?:alpha|)|t)|closest(?:alpha|hwb|)|deallocate|exact(?:alpha|)|match|resolve(?:alpha|)|s(?:et|forindex|total)|transparent)|py(?:merge(?:gray|)|res(?:ampled|ized)|))|reate(?:from(?:g(?:d(?:2(?:part|)|)|if)|jpeg|png|string|wbmp|x(?:bm|pm))|truecolor|))|d(?:ashedline|estroy)|ellipse|f(?:il(?:l(?:ed(?:arc|ellipse|polygon|rectangle)|toborder|)|ter)|ont(?:height|width)|t(?:bbox|text))|g(?:ammacorrect|d(?:2|)|if)|i(?:nterlace|struecolor)|jpeg|l(?:ayereffect|ine|oadfont)|p(?:alettecopy|ng|olygon|s(?:bbox|copyfont|e(?:ncodefont|xtendfont)|freefont|loadfont|slantfont|text))|r(?:ectangle|otate)|s(?:avealpha|et(?:brush|pixel|style|t(?:hickness|ile))|tring(?:up|)|x|y)|t(?:ruecolortopalette|tf(?:bbox|text)|ypes)|wbmp|xbm)|p_(?:8bit|a(?:lerts|ppend)|b(?:ase64|inary|ody(?:struct|))|c(?:heck|l(?:earflag_full|ose)|reatemailbox)|delete(?:mailbox|)|e(?:rrors|xpunge)|fetch(?:_overview|body|header|structure)|get(?:_quota(?:root|)|acl|mailboxes|subscribed)|header(?:info|s|)|l(?:ast_error|ist(?:mailbox|s(?:can|ubscribed)|)|sub)|m(?:ail(?:_(?:co(?:mpose|py)|move)|boxmsginfo|)|ime_header_decode|sgno)|num_(?:msg|recent)|open|ping|qprint|r(?:e(?:namemailbox|open)|fc822_(?:parse_(?:adrlist|headers)|write_address))|s(?:canmailbox|e(?:arch|t(?:_quota|acl|flag_full))|ort|tatus|ubscribe)|t(?:hread|imeout)|u(?:id|n(?:delete|subscribe)|tf(?:7_(?:decode|encode)|8))))|p(?:lode|ort_request_variables))|n(?:_array|et_(?:ntop|pton)|gres_(?:autocommit|c(?:lose|o(?:mmit|nnect))|f(?:etch_(?:array|object|row)|ield_(?:length|n(?:ame|ullable)|precision|scale|type))|num_(?:fields|rows)|pconnect|query|rollback)|i_(?:alter|get(?:_all|)|restore|set)|t(?:erface_exists|val))|p(?:2long|tc(?:embed|parse))|rcg_(?:channel_mode|disconnect|eval_ecmascript_params|fetch_error_msg|get_username|html_encode|i(?:gnore_(?:add|del)|nvite|s_conn_alive)|join|kick|l(?:ist|ookup_format_messages|users)|msg|n(?:ames|ick(?:name_(?:escape|unescape)|)|otice)|oper|p(?:art|connect)|register_format_messages|set_(?:current|file|on_die)|topic|who(?:is|))|s_(?:a(?:rray|)|bool|callable|d(?:ir|ouble)|executable|f(?:i(?:le|nite)|loat)|in(?:finite|t(?:eger|))|l(?:ink|ong)|n(?:an|u(?:ll|meric))|object|re(?:a(?:dable|l)|source)|s(?:calar|oap_fault|tring|ubclass_of)|uploaded_file|writ(?:able|eable))|terator(?:-to-array|_count))|j(?:ava_last_exception_(?:clear|get)|d(?:dayofweek|monthname|to(?:french|gregorian|j(?:ewish|ulian)|unix))|ewishtojd|oin|peg2wbmp|uliantojd)|k(?:ey|rsort|sort)|l(?:cg_value|dap_(?:8859_to_t61|add|bind|c(?:lose|o(?:mpare|nnect|unt_entries))|d(?:elete|n2ufn)|e(?:rr(?:2str|no|or)|xplode_dn)|f(?:irst_(?:attribute|entry|reference)|ree_result)|get_(?:attributes|dn|entries|option|values(?:_len|))|list|mod(?:_(?:add|del|replace)|ify)|next_(?:attribute|entry|reference)|parse_re(?:ference|sult)|re(?:ad|name)|s(?:asl_bind|e(?:arch|t_(?:option|rebind_proc))|ort|tart_tls)|t61_to_8859|unbind)|evenshtein|ink(?:info|)|o(?:cal(?:econv|time)|g(?:1(?:0|p)|)|ng2ip)|stat|trim|zf_(?:compress|decompress|optimized_for))|m(?:a(?:i(?:l(?:parse_(?:determine_best_xfer_encoding|msg_(?:create|extract_part(?:_file|)|free|get_(?:part(?:_data|)|structure)|parse(?:_file|))|rfc822_parse_addresses|stream_encode|uudecode_all)|)|n)|x)|b_(?:convert_(?:case|encoding|kana|variables)|de(?:code_(?:mimeheader|numericentity)|tect_(?:encoding|order))|e(?:ncode_(?:mimeheader|numericentity)|reg(?:_(?:match|replace|search(?:_(?:get(?:pos|regs)|init|pos|regs|setpos)|))|i(?:_replace|)|))|get_info|http_(?:input|output)|internal_encoding|l(?:anguage|ist_encodings)|output_handler|p(?:arse_str|referred_mime_name)|regex_(?:encoding|set_options)|s(?:end_mail|plit|tr(?:cut|imwidth|len|pos|rpos|to(?:lower|upper)|width)|ubst(?:itute_character|r(?:_count|))))|c(?:al_(?:append_event|c(?:lose|reate_calendar)|d(?:a(?:te_(?:compare|valid)|y(?:_of_(?:week|year)|s_in_month))|elete_(?:calendar|event))|e(?:vent_(?:add_attribute|init|set_(?:alarm|c(?:ategory|lass)|description|end|recur_(?:daily|monthly_(?:mday|wday)|none|weekly|yearly)|start|title))|xpunge)|fetch_(?:current_stream_event|event)|is_leap_year|list_(?:alarms|events)|next_recurrence|open|popen|re(?:name_calendar|open)|s(?:nooze|tore_event)|time_valid|week_of_year)|rypt_(?:c(?:bc|fb|reate_iv)|decrypt|e(?:cb|nc(?:_(?:get_(?:algorithms_name|block_size|iv_size|key_size|modes_name|supported_key_sizes)|is_block_(?:algorithm(?:_mode|)|mode)|self_test)|rypt))|ge(?:neric(?:_(?:deinit|end|init)|)|t_(?:block_size|cipher_name|iv_size|key_size))|list_(?:algorithms|modes)|module_(?:close|get_(?:algo_(?:block_size|key_size)|supported_key_sizes)|is_block_(?:algorithm(?:_mode|)|mode)|open|self_test)|ofb)|ve_(?:adduser(?:arg|)|bt|c(?:h(?:eckstatus|kpwd|ngpwd)|o(?:mpleteauthorizations|nnect(?:ionerror|)))|d(?:e(?:l(?:ete(?:response|trans|usersetup)|user)|stroy(?:conn|engine))|isableuser)|e(?:dituser|nableuser)|force|g(?:et(?:c(?:ell(?:bynum|)|ommadelimited)|header|user(?:arg|param))|ft|l|ut)|i(?:nit(?:conn|engine|usersetup)|scommadelimited)|list(?:stats|users)|m(?:axconntimeout|onitor)|num(?:columns|rows)|override|p(?:arsecommadelimited|ing|reauth(?:completion|))|qc|re(?:sponseparam|turn(?:code|status|))|s(?:ale|et(?:blocking|dropfile|ip|ssl(?:_files|)|t(?:imeout|le)))|t(?:ext_(?:avs|c(?:ode|v))|rans(?:action(?:a(?:uth|vs)|batch|cv|i(?:d|tem)|ssent|text)|inqueue|new|param|send))|u(?:b|wait)|v(?:erify(?:connection|sslcert)|oid)))|d(?:5(?:_file|)|ecrypt_generic)|e(?:m(?:cache_debug|ory_get_usage)|t(?:aphone|hod_exists))|hash(?:_(?:count|get_(?:block_size|hash_name)|keygen_s2k)|)|i(?:crotime|me_content_type|n(?:g_(?:set(?:cubicthreshold|scale)|useswfversion)|))|k(?:dir|time)|o(?:ney_format|ve_uploaded_file)|s(?:ession_(?:c(?:o(?:nnect|unt)|reate)|d(?:estroy|isconnect)|find|get(?:_(?:array|data)|)|inc|l(?:ist(?:var|)|ock)|plugin|randstr|set(?:_(?:array|data)|)|timeout|un(?:iq|lock))|g_(?:get_queue|re(?:ceive|move_queue)|s(?:e(?:nd|t_queue)|tat_queue))|ql(?:_(?:affected_rows|c(?:lose|onnect|reate(?:_db|db))|d(?:ata_seek|b(?:_query|name)|rop_db)|error|f(?:etch_(?:array|field|object|row)|ield(?:_(?:flags|len|name|seek|t(?:able|ype))|flags|len|name|t(?:able|ype))|ree_result)|list_(?:dbs|fields|tables)|num(?:_(?:fields|rows)|fields|rows)|pconnect|query|re(?:gcase|sult)|select_db|tablename)|)|sql_(?:bind|c(?:lose|onnect)|data_seek|execute|f(?:etch_(?:a(?:rray|ssoc)|batch|field|object|row)|ield_(?:length|name|seek|type)|ree_(?:result|statement))|g(?:et_last_message|uid_string)|init|min_(?:error_severity|message_severity)|n(?:ext_result|um_(?:fields|rows))|pconnect|query|r(?:esult|ows_affected)|select_db))|t_(?:getrandmax|rand|srand)|uscat_(?:close|g(?:et|ive)|setup(?:_net|))|ysql(?:_(?:affected_rows|c(?:hange_user|l(?:ient_encoding|ose)|onnect|reate_db)|d(?:ata_seek|b_(?:name|query)|rop_db)|e(?:rr(?:no|or)|scape_string)|f(?:etch_(?:a(?:rray|ssoc)|field|lengths|object|row)|ield_(?:flags|len|name|seek|t(?:able|ype))|ree_result)|get_(?:client_info|host_info|proto_info|server_info)|in(?:fo|sert_id)|list_(?:dbs|fields|processes|tables)|num_(?:fields|rows)|p(?:connect|ing)|query|re(?:al_escape_string|sult)|s(?:elect_db|tat)|t(?:ablename|hread_id)|unbuffered_query)|i(?:_(?:a(?:ffected_rows|utocommit)|bind_(?:param|result)|c(?:ha(?:nge_user|racter_set_name)|l(?:ient_encoding|ose)|o(?:mmit|nnect(?:_err(?:no|or)|)))|d(?:ata_seek|ebug|isable_r(?:eads_from_master|pl_parse)|ump_debug_info)|e(?:mbedded_connect|nable_r(?:eads_from_master|pl_parse)|rr(?:no|or)|scape_string|xecute)|f(?:etch(?:_(?:a(?:rray|ssoc)|field(?:_direct|s|)|lengths|object|row)|)|ield_(?:count|seek|tell)|ree_result)|get_(?:client_(?:info|version)|host_info|metadata|proto_info|server_(?:info|version))|in(?:fo|it|sert_id)|kill|m(?:aster_query|ore_results|ulti_query)|n(?:ext_result|um_(?:fields|rows))|options|p(?:aram_count|ing|repare)|query|r(?:e(?:al_(?:connect|escape_string|query)|port)|ollback|pl_(?:p(?:arse_enabled|robe)|query_type))|s(?:e(?:lect_db|nd_(?:long_data|query)|rver_(?:end|init)|t_opt)|qlstate|sl_set|t(?:at|mt_(?:affected_rows|bind_(?:param|result)|close|data_seek|e(?:rr(?:no|or)|xecute)|f(?:etch|ree_result)|init|num_rows|p(?:aram_count|repare)|res(?:et|ult_metadata)|s(?:end_long_data|qlstate|tore_result))|ore_result))|thread_(?:id|safe)|use_result|warning_count)|)))|n(?:at(?:casesort|sort)|curses_(?:a(?:dd(?:ch(?:nstr|str|)|nstr|str)|ssume_default_colors|ttr(?:o(?:ff|n)|set))|b(?:audrate|eep|kgd(?:set|)|o(?:rder|ttom_panel))|c(?:an_change_color|break|l(?:ear|rto(?:bot|eol))|olor_(?:content|set)|urs_set)|d(?:e(?:f(?:_(?:prog_mode|shell_mode)|ine_key)|l(?:_panel|ay_output|ch|eteln|win))|oupdate)|e(?:cho(?:char|)|nd|rase(?:char|))|f(?:ilter|l(?:ash|ushinp))|get(?:ch|m(?:axyx|ouse)|yx)|h(?:a(?:lfdelay|s_(?:colors|i(?:c|l)|key))|ide_panel|line)|i(?:n(?:ch|it(?:_(?:color|pair)|)|s(?:ch|delln|ertln|str|tr))|sendwin)|k(?:ey(?:ok|pad)|illchar)|longname|m(?:eta|o(?:use(?:_trafo|interval|mask)|ve(?:_panel|))|v(?:add(?:ch(?:nstr|str|)|nstr|str)|cur|delch|getch|hline|inch|vline|waddstr))|n(?:apms|ew(?:_panel|pad|win)|l|o(?:cbreak|echo|nl|qiflush|raw))|p(?:a(?:ir_content|nel_(?:above|below|window))|noutrefresh|refresh|utp)|qiflush|r(?:aw|e(?:fresh|place_panel|set(?:_(?:prog_mode|shell_mode)|ty)))|s(?:avetty|cr(?:_(?:dump|init|restore|set)|l)|how_panel|lk_(?:attr(?:o(?:ff|n)|set|)|c(?:lear|olor)|init|noutrefresh|re(?:fresh|store)|set|touch)|ta(?:nd(?:end|out)|rt_color))|t(?:erm(?:attrs|name)|imeout|op_panel|ypeahead)|u(?:nget(?:ch|mouse)|pdate_panels|se_(?:default_colors|e(?:nv|xtended_names)))|v(?:idattr|line)|w(?:a(?:dd(?:ch|str)|ttr(?:o(?:ff|n)|set))|border|c(?:lear|olor_set)|erase|getch|hline|mo(?:use_trafo|ve)|noutrefresh|refresh|stand(?:end|out)|vline))|ext|gettext|l(?:2br|_langinfo)|otes_(?:body|c(?:opy_db|reate_(?:db|note))|drop_db|find_note|header_info|list_msgs|mark_(?:read|unread)|nav_create|search|unread|version)|sapi_(?:re(?:quest_headers|sponse_headers)|virtual)|umber_format)|o(?:b_(?:clean|end_(?:clean|flush)|flush|g(?:et_(?:c(?:lean|ontents)|flush|le(?:ngth|vel)|status)|zhandler)|i(?:conv_handler|mplicit_flush)|list_handlers|start|tidyhandler)|c(?:i(?:_(?:bind_by_name|c(?:ancel|lose|o(?:mmit|nnect))|define_by_name|e(?:rror|xecute)|f(?:etch(?:_(?:a(?:ll|rray|ssoc)|object|row)|)|ield_(?:is_null|name|precision|s(?:cale|ize)|type(?:_raw|))|ree_statement)|internal_debug|lob_(?:copy|is_equal)|n(?:ew_(?:c(?:o(?:llection|nnect)|ursor)|descriptor)|um_(?:fields|rows))|p(?:a(?:rse|ssword_change)|connect)|r(?:esult|ollback)|s(?:e(?:rver_version|t_prefetch)|tatement_type))|bindbyname|c(?:ancel|loselob|o(?:l(?:l(?:a(?:ppend|ssign(?:elem|))|getelem|max|size|trim)|umn(?:isnull|name|precision|s(?:cale|ize)|type(?:raw|)))|mmit))|definebyname|e(?:rror|xecute)|f(?:etch(?:into|statement|)|ree(?:c(?:ollection|ursor)|desc|statement))|internaldebug|lo(?:adlob|go(?:ff|n))|n(?:ew(?:c(?:ollection|ursor)|descriptor)|logon|umcols)|p(?:arse|logon)|r(?:esult|o(?:llback|wcount))|s(?:avelob(?:file|)|e(?:rverversion|tprefetch)|tatementtype)|write(?:lobtofile|temporarylob))|tdec)|dbc_(?:autocommit|binmode|c(?:lose(?:_all|)|o(?:lumn(?:privileges|s)|mmit|nnect)|ursor)|d(?:ata_source|o)|e(?:rror(?:msg|)|xec(?:ute|))|f(?:etch_(?:array|into|object|row)|ield_(?:len|n(?:ame|um)|precision|scale|type)|oreignkeys|ree_result)|gettypeinfo|longreadlen|n(?:ext_result|um_(?:fields|rows))|p(?:connect|r(?:epare|imarykeys|ocedure(?:columns|s)))|r(?:esult(?:_all|)|ollback)|s(?:etoption|pecialcolumns|tatistics)|table(?:privileges|s))|pen(?:al_(?:buffer_(?:create|d(?:ata|estroy)|get|loadwav)|context_(?:c(?:reate|urrent)|destroy|process|suspend)|device_(?:close|open)|listener_(?:get|set)|s(?:ource_(?:create|destroy|get|p(?:ause|lay)|rewind|s(?:et|top))|tream))|dir|log|ssl_(?:csr_(?:export(?:_to_file|)|new|sign)|error_string|free_key|get_p(?:rivatekey|ublickey)|open|p(?:k(?:cs7_(?:decrypt|encrypt|sign|verify)|ey_(?:export(?:_to_file|)|get_p(?:rivate|ublic)|new))|rivate_(?:decrypt|encrypt)|ublic_(?:decrypt|encrypt))|s(?:eal|ign)|verify|x509_(?:check(?:_private_key|purpose)|export(?:_to_file|)|free|parse|read)))|r(?:a_(?:bind|c(?:lose|o(?:lumn(?:name|size|type)|mmit(?:o(?:ff|n)|)))|do|e(?:rror(?:code|)|xec)|fetch(?:_into|)|getcolumn|logo(?:ff|n)|num(?:cols|rows)|open|p(?:arse|logon)|rollback)|d)|utput_(?:add_rewrite_var|reset_rewrite_vars)|v(?:er(?:load|ride_function)|rimos_(?:c(?:lose|o(?:mmit|nnect)|ursor)|exec(?:ute|)|f(?:etch_(?:into|row)|ield_(?:len|n(?:ame|um)|type)|ree_result)|longreadlen|num_(?:fields|rows)|prepare|r(?:esult(?:_all|)|ollback))))|p(?:a(?:ck|rse(?:_(?:ini_file|str|url)|kit_(?:compile_(?:file|string)|func_arginfo))|ssthru|thinfo)|c(?:lose|ntl_(?:alarm|exec|fork|getpriority|s(?:etpriority|ignal)|w(?:ait(?:pid|)|exitstatus|if(?:exited|s(?:ignaled|topped))|stopsig|termsig)))|df_(?:a(?:dd_(?:annotation|bookmark|l(?:aunchlink|ocallink)|note|outline|pdflink|thumbnail|weblink)|rc(?:n|)|ttach_file)|begin_(?:pa(?:ge|ttern)|template)|c(?:ircle|l(?:ip|ose(?:_(?:image|pdi(?:_page|))|path(?:_(?:fill_stroke|stroke)|)|))|on(?:cat|tinue_text)|urveto)|delete|end(?:_(?:pa(?:ge|ttern)|template)|path)|fi(?:ll(?:_stroke|)|ndfont)|get_(?:buffer|font(?:name|size|)|image_(?:height|width)|m(?:ajorversion|inorversion)|p(?:arameter|di_(?:parameter|value))|value)|initgraphics|lineto|m(?:akespotcolor|oveto)|new|open(?:_(?:ccitt|file|gif|image(?:_file|)|jpeg|memory_image|p(?:di(?:_page|)|ng)|tiff)|)|place_(?:image|pdi_page)|r(?:e(?:ct|store)|otate)|s(?:ave|cale|et(?:_(?:border_(?:color|dash|style)|char_spacing|duration|font|horiz_scaling|info(?:_(?:author|creator|keywords|subject|title)|)|leading|parameter|text_(?:matrix|pos|r(?:endering|ise))|value|word_spacing)|color|dash|f(?:lat|ont)|gray(?:_(?:fill|stroke)|)|line(?:cap|join|width)|m(?:atrix|iterlimit)|polydash|rgbcolor(?:_(?:fill|stroke)|))|how(?:_(?:boxed|xy)|)|kew|tr(?:ingwidth|oke))|translate)|f(?:pro_(?:cleanup|init|process(?:_raw|)|version)|sockopen)|g_(?:affected_rows|c(?:ancel_query|l(?:ient_encoding|ose)|o(?:n(?:nect(?:ion_(?:busy|reset|status)|)|vert)|py_(?:from|to)))|d(?:bname|elete)|e(?:nd_copy|scape_(?:bytea|string))|f(?:etch_(?:a(?:ll|rray|ssoc)|object|r(?:esult|ow))|ield_(?:is_null|n(?:ame|um)|prtlen|size|type)|ree_result)|get_(?:notify|pid|result)|host|insert|l(?:ast_(?:error|notice|oid)|o_(?:c(?:lose|reate)|export|import|open|read(?:_all|)|seek|tell|unlink|write))|meta_data|num_(?:fields|rows)|options|p(?:arameter_status|connect|ing|ort|ut_line)|query|result_(?:error|s(?:eek|tatus))|se(?:lect|nd_query|t_client_encoding)|t(?:race|ty)|u(?:n(?:escape_bytea|trace)|pdate)|version)|hp(?:_(?:check_syntax|ini_scanned_files|logo_guid|register_url_stream_wrapper|s(?:api_name|tr(?:eam_(?:c(?:a(?:n_cast|st)|lose(?:dir|)|opy_to_(?:mem|stream))|eof|f(?:ilter_(?:register_factory|unregister_factory)|lush|open_(?:from_file|t(?:emporary_file|mpfile)))|get(?:c|s)|is(?:_persistent|)|make_seekable|open(?:_wrapper(?:_(?:as_file|ex)|)|dir)|passthru|re(?:ad(?:dir|)|winddir)|s(?:eek|ock_open_(?:from_socket|host|unix)|tat(?:_path|))|tell|write)|ip_whitespace))|un(?:ame|register_url_stream_wrapper))|credits|info|version)|i|ng2wbmp|o(?:pen|s(?:ix_(?:ctermid|get(?:_last_error|cwd|e(?:gid|uid)|g(?:id|r(?:gid|nam|oups))|login|p(?:g(?:id|rp)|id|pid|w(?:nam|uid))|rlimit|sid|uid)|isatty|kill|mkfifo|s(?:et(?:e(?:gid|uid)|gid|pgid|sid|uid)|trerror)|t(?:imes|tyname)|uname)|)|w)|r(?:e(?:g_(?:grep|match(?:_all|)|quote|replace(?:_callback|)|split)|v)|int(?:_r|er_(?:abort|c(?:lose|reate_(?:brush|dc|font|pen))|d(?:elete_(?:brush|dc|font|pen)|raw_(?:bmp|chord|elipse|line|pie|r(?:ectangle|oundrect)|text))|end_(?:doc|page)|get_option|l(?:ist|ogical_fontheight)|open|s(?:e(?:lect_(?:brush|font|pen)|t_option)|tart_(?:doc|page))|write)|f)|oc_(?:close|get_status|nice|open|terminate))|spell_(?:add_to_(?:personal|session)|c(?:heck|lear_session|onfig_(?:create|d(?:ata_dir|ict_dir)|ignore|mode|personal|r(?:epl|untogether)|save_repl))|new(?:_(?:config|personal)|)|s(?:ave_wordlist|tore_replacement|uggest))|utenv)|q(?:dom_(?:error|tree)|uote(?:d_printable_decode|meta))|r(?:a(?:d2deg|n(?:d|ge)|r_(?:close|entry_get|list|open)|wurl(?:decode|encode))|e(?:a(?:d(?:_exif_data|dir|file|gzfile|lin(?:e(?:_(?:add_history|c(?:allback_(?:handler_(?:install|remove)|read_char)|lear_history|ompletion_function)|info|list_history|on_new_line|re(?:ad_history|display)|write_history)|)|k))|lpath)|code(?:_(?:file|string)|)|gister_(?:shutdown_function|tick_function)|name(?:_function|)|s(?:et|tore_(?:e(?:rror_handler|xception_handler)|include_path))|wind(?:dir|))|mdir|ound|sort|trim)|s(?:candir|e(?:m_(?:acquire|get|re(?:lease|move))|rialize|s(?:am_(?:affected_rows|co(?:mmit|nnect)|di(?:agnostic|sconnect)|e(?:rrormsg|xecimm)|f(?:etch_(?:array|r(?:esult|ow))|ield_(?:array|name)|ree_result)|num_fields|query|rollback|se(?:ek_row|ttransaction))|sion_(?:c(?:ache_(?:expire|limiter)|ommit)|de(?:code|stroy)|encode|get_cookie_params|i(?:d|s_registered)|module_name|name|reg(?:enerate_id|ister)|s(?:ave_path|et_(?:cookie_params|save_handler)|tart)|un(?:register|set)|write_close))|t(?:_(?:e(?:rror_handler|xception_handler)|file_buffer|include_path|magic_quotes_runtime|time_limit)|cookie|locale|rawcookie|type))|h(?:a1(?:_file|)|ell_exec|m(?:_(?:attach|detach|get_var|put_var|remove(?:_var|))|op_(?:close|delete|open|read|size|write))|ow_source|uffle)|i(?:m(?:ilar_text|plexml_(?:import_dom|load_(?:file|string)))|n(?:h|)|zeof)|leep|nmp(?:_(?:get_(?:quick_print|valueretrieval)|read_mib|set_(?:enum_print|oid_numeric_print|quick_print|valueretrieval))|get(?:next|)|realwalk|set|walk(?:oid|))|o(?:cket_(?:accept|bind|c(?:l(?:ear_error|ose)|onnect|reate(?:_(?:listen|pair)|))|get(?:_(?:option|status)|peername|sockname)|l(?:ast_error|isten)|re(?:ad|cv(?:from|))|s(?:e(?:lect|nd(?:to|)|t_(?:block(?:ing|)|nonblock|option|timeout))|hutdown|trerror)|write)|rt|undex)|p(?:l(?:_classes|it(?:i|))|rintf)|q(?:l(?:_regcase|ite_(?:array_query|busy_timeout|c(?:hanges|lose|olumn|reate_(?:aggregate|function)|urrent)|e(?:rror_string|scape_string|xec)|f(?:actory|etch_(?:a(?:ll|rray)|column_types|object|s(?:ingle|tring))|ield_name)|has_(?:more|prev)|l(?:ast_(?:error|insert_rowid)|ib(?:encoding|version))|n(?:ext|um_(?:fields|rows))|open|p(?:open|rev)|query|rewind|s(?:eek|ingle_query)|u(?:df_(?:decode_binary|encode_binary)|nbuffered_query)))|rt)|rand|s(?:canf|h2_(?:auth_(?:none|p(?:assword|ubkey_file))|connect|exec|f(?:etch_stream|ingerprint)|methods_negotiated|s(?:cp_(?:recv|send)|ftp(?:_(?:lstat|mkdir|r(?:e(?:a(?:dlink|lpath)|name)|mdir)|s(?:tat|ymlink)|unlink)|)|hell)|tunnel))|t(?:at|r(?:_(?:ireplace|pad|r(?:ep(?:eat|lace)|ot13)|s(?:huffle|plit)|word_count)|c(?:asecmp|hr|mp|oll|spn)|eam_(?:co(?:ntext_(?:create|get_(?:default|options)|set_(?:option|params))|py_to_stream)|filter_(?:append|prepend|re(?:gister|move))|get_(?:contents|filters|line|meta_data|transports|wrappers)|register_wrapper|s(?:e(?:lect|t_(?:blocking|timeout|write_buffer))|ocket_(?:accept|client|enable_crypto|get_name|pair|recvfrom|se(?:ndto|rver)))|wrapper_(?:re(?:gister|store)|unregister))|ftime|i(?:p(?:_tags|cslashes|os|slashes)|str)|len|n(?:atc(?:asecmp|mp)|c(?:asecmp|mp))|p(?:brk|os|time)|r(?:chr|ev|ipos|pos)|s(?:pn|tr)|t(?:o(?:k|lower|time|upper)|r)|val))|ubstr(?:_(?:co(?:mpare|unt)|replace)|)|wf(?:_(?:a(?:ction(?:g(?:eturl|oto(?:frame|label))|nextframe|p(?:lay|revframe)|s(?:ettarget|top)|togglequality|waitforframe)|dd(?:buttonrecord|color))|closefile|define(?:bitmap|font|line|poly|rect|text)|end(?:button|doaction|s(?:hape|ymbol))|font(?:s(?:ize|lant)|tracking)|get(?:bitmapinfo|f(?:ontinfo|rame))|l(?:abelframe|ookat)|m(?:odifyobject|ulcolor)|nextid|o(?:ncondition|penfile|rtho(?:2|))|p(?:erspective|laceobject|o(?:larview|pmatrix|sround)|ushmatrix)|r(?:emoveobject|otate)|s(?:cale|etf(?:ont|rame)|h(?:ape(?:arc|curveto(?:3|)|fill(?:bitmap(?:clip|tile)|off|solid)|line(?:solid|to)|moveto)|owframe)|tart(?:button|doaction|s(?:hape|ymbol)))|t(?:extwidth|ranslate)|viewport)|action|b(?:itmap|utton(?:_keypress|))|displayitem|f(?:ill|ont)|gradient|mo(?:rph|vie)|s(?:hape|prite)|text(?:field|))|y(?:base_(?:affected_rows|c(?:lose|onnect)|d(?:ata_seek|eadlock_retry_count)|f(?:etch_(?:a(?:rray|ssoc)|field|object|row)|ield_seek|ree_result)|get_last_message|min_(?:client_severity|error_severity|message_severity|server_severity)|num_(?:fields|rows)|pconnect|query|result|se(?:lect_db|t_message_handler)|unbuffered_query)|mlink|s(?:log|tem)))|t(?:an(?:h|)|cpwrap_check|e(?:mpnam|xtdomain)|i(?:dy_(?:access_count|c(?:lean_repair|onfig_count)|diagnose|error_count|get(?:_(?:body|config|error_buffer|h(?:ead|tml(?:_ver|))|output|r(?:elease|oot)|status)|opt)|is_x(?:html|ml)|load_config|parse_(?:file|string)|re(?:pair_(?:file|string)|set_config)|s(?:ave_config|et(?:_encoding|opt))|warning_count)|me(?:_nanosleep|))|mpfile|o(?:ken_(?:get_all|name)|uch)|ri(?:gger_error|m))|u(?:asort|c(?:first|words)|dm_(?:a(?:dd_search_limit|lloc_agent(?:_array|)|pi_version)|c(?:at_(?:list|path)|heck_(?:charset|stored)|l(?:ear_search_limits|ose_stored)|rc32)|err(?:no|or)|f(?:ind|ree_(?:agent|ispell_data|res))|get_(?:doc_count|res_(?:field|param))|hash32|load_ispell_data|open_stored|set_agent_param)|ksort|mask|n(?:i(?:qid|xtojd)|link|pack|register_tick_function|serialize)|rl(?:decode|encode)|s(?:er_error|leep|ort)|tf8_(?:decode|encode))|v(?:ar(?:_(?:dump|export)|iant(?:_(?:a(?:bs|dd|nd)|c(?:a(?:st|t)|mp)|d(?:ate_(?:from_timestamp|to_timestamp)|iv)|eqv|fix|get_type|i(?:div|mp|nt)|m(?:od|ul)|n(?:eg|ot)|or|pow|round|s(?:et(?:_type|)|ub)|xor)|))|ersion_compare|fprintf|irtual|p(?:opmail_(?:a(?:dd_(?:alias_domain(?:_ex|)|domain(?:_ex|)|user)|lias_(?:add|del(?:_domain|)|get(?:_all|))|uth_user)|del_(?:domain(?:_ex|)|user)|error|passwd|set_user_quota)|rintf)|sprintf)|w(?:32api_(?:deftype|in(?:it_dtype|voke_function)|register_function|set_call_method)|ddx_(?:add_vars|deserialize|packet_(?:end|start)|serialize_va(?:lue|rs))|ordwrap)|x(?:attr_(?:get|list|remove|s(?:et|upported))|diff_(?:file_(?:diff(?:_binary|)|merge3|patch(?:_binary|))|string_(?:diff(?:_binary|)|merge3|patch(?:_binary|)))|ml(?:_(?:error_string|get_(?:current_(?:byte_index|column_number|line_number)|error_code)|parse(?:_into_struct|r_(?:create(?:_ns|)|free|get_option|set_option)|)|set_(?:character_data_handler|default_handler|e(?:lement_handler|nd_namespace_decl_handler|xternal_entity_ref_handler)|notation_decl_handler|object|processing_instruction_handler|start_namespace_decl_handler|unparsed_entity_decl_handler))|rpc_(?:decode(?:_request|)|encode(?:_request|)|get_type|is_fault|parse_method_descriptions|se(?:rver_(?:add_introspection_data|c(?:all_method|reate)|destroy|register_(?:introspection_callback|method))|t_type)))|p(?:ath_(?:eval(?:_expression|)|new_context)|tr_(?:eval|new_context))|sl(?:_xsltprocessor_(?:get_parameter|has_exslt_support|import_stylesheet|re(?:gister_php_functions|move_parameter)|set_parameter|transform_to_(?:doc|uri|xml))|t_(?:backend_(?:info|name|version)|create|err(?:no|or)|free|getopt|process|set(?:_(?:base|e(?:ncoding|rror_handler)|log|object|s(?:ax_handler(?:s|)|cheme_handler(?:s|)))|opt))))|y(?:az_(?:addinfo|c(?:cl_(?:conf|parse)|lose|onnect)|database|e(?:lement|rr(?:no|or)|s_result)|get_option|hits|itemorder|present|r(?:ange|ecord)|s(?:c(?:an(?:_result|)|hema)|e(?:arch|t_option)|ort|yntax)|wait)|p_(?:all|cat|err(?:_string|no)|first|get_default_domain|ma(?:ster|tch)|next|order))|z(?:end_(?:logo_guid|version)|ip_(?:close|entry_(?:c(?:lose|ompress(?:edsize|ionmethod))|filesize|name|open|read)|open|read)|lib_get_coding_type))\\b" }
	}
}

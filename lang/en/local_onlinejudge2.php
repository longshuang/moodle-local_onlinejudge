<?php
	defined('MOODLE_INTERNAL') || die();
	
	$string['about'] = '<p>Description about onlinejudge2,eh...</p>
	<p>If you want to join us,see：<a href="https://git.github.com/hit-moodle/onlinejudge">our git source</a></p>' ;
    $string['addtestcases'] = 'Add $a more testcase(s)';
    $string['assignmentlangs'] = 'Programming language';
    $string['badtestcasefile'] = 'This file does not exist or can not be read';
    $string['cannotruncompiler'] = 'Can not execute the script of compiler';
    $string['case'] = 'Case $a:';
    $string['compileonly'] = 'Compile only';
    $string['configmaxcpu'] = 'Default maximum assignment cpu time for all assignments on the site (subject to other local settings)';
    $string['configmaxmem'] = 'Default maximum assignment memory usage for all assignments on the site (subject to other local settings)';
    $string['cpulimit'] = 'Maximum CPU time';
    $string['createsubmissionerror'] = 'There is an error during create submission ,ideone';
    $string['denytoreadfile'] = 'You have not the permission to read this file.';
    $string['descratiope'] = 'Grade of presentation error is equal to testcast\'s max grade times this ratio';
    $string['download'] = 'Download ';
    $string['duejudge'] = 'Judge after due date';
    $string['feedbackforwa'] = 'Feedback for Wrong Answer';
    $string['filereaderror'] = 'Can not read this file';
    $string['ideonelogo'] = '<a href=\"https://github.com/yuxiaoye1223/onlinejudge2\">Moodle Online Judge2</a> uses <a href=\"http://ideone.com\">Ideone API</a> &copy; by <a href=\"http://sphere-research.com\">Sphere Research Labs</a>';
    $string['info'] = 'Information';
    $string['infoat'] = 'A good program must return 0 if no error occur.';
    $string['infocompileok'] = 'It seems that the compiler likes your code.';
    $string['infoie'] = 'Sandbox error. Report to admin please.';
    $string['infomle'] = 'You ate too much memory.';
    $string['infoole'] = 'Your code sent too much to stdout.';
    $string['infope'] = 'Almost perfect, except some bad white spaces, tabs, new lines and etc.';
    $string['infopending'] = 'About $a minute(s) left.';
    $string['infore'] = '[SIGSEGV, Segment fault] Bad array index, bad pointer access or even worse.';
    $string['inforf'] = 'Your code calls some functions which are <em>not</em> allowed to run.';
    $string['infotle'] = 'The program has been running for a too long time.';
    $string['infowa'] = 'Double check your code. Don\'t output any typo or unrequired character.';
    $string['input'] = 'Input';
    $string['inputfile'] = 'Input file';
    $string['judgetime'] = 'Judge time';
    $string['judgemethods'] = 'the supported compiler language';
    $string['langc_sandbox'] = 'C';
    $string['langc_warn2err_sandbox'] = 'C (Warnings as Errors)';
    $string['langcpp_sandbox'] = 'C++';
    $string['langcpp_warn2err_sandbox'] = 'C++ (Warnings as Errors)';
    $string['langada_ideone'] = 'Ada (ideone.com)';                      
    $string['langassembler_ideone'] = 'Assembler (ideone.com)';                  
    $string['langawk_gawk_ideone'] = 'AWK (gawk, ideone.com)';            
    $string['langawk_mawk_ideone'] = 'AWK (mawk, ideone.com)';             
    $string['langbash_ideone'] = 'Bash (ideone.com)';             
    $string['langbc_ideone'] = 'bc (ideone.com)';                        
    $string['langbrainfxxk_ideone'] = 'Brainf**k (ideone.com)';            
    $string['langc_ideone'] = 'C (ideone.com)';                     
    $string['langcsharp_ideone'] = 'C# (ideone.com)';                        
    $string['langcpp_ideone'] = 'C++ (ideone.com)';                  
    $string['langc99_strict_ideone'] = 'C99 strict (ideone.com)';             
    $string['langclojure_ideone'] = 'Clojure (ideone.com)';                
    $string['langcobol_ideone'] = 'COBOL (ideone.com)';                      
    $string['langcobol85_ideone'] = 'COBOL 85 (ideone.com)';                      
    $string['langcommon_lisp_clisp_ideone'] = 'Common Lisp (clisp, ideone.com)';    
    $string['langd_dmd_ideone'] = 'D (dmd, ideone.com)';                 
    $string['langerlang_ideone'] = 'Erlang (ideone.com)';                     
    $string['langforth_ideone'] = 'Forth (ideone.com)';                     
    $string['langfortran_ideone'] = 'Fortran (ideone.com)';                 
    $string['langgo_ideone'] = 'Go (ideone.com)';                
    $string['langhaskell_ideone'] = 'Haskell (ideone.com)';                   
    $string['langicon_ideone'] = 'Icon (ideone.com)';             
    $string['langintercal_ideone'] = 'Intercal (ideone.com)';                 
    $string['langjava_ideone'] = 'Java (ideone.com)';                    
    $string['langjavascript_rhino_ideone'] = 'JavaScript (rhino, ideone.com)';         
    $string['langjavascript_spidermonkey_ideone'] = 'JavaScript (spidermonkey, ideone.com)';  
    $string['langlua_ideone'] = 'Lua (ideone.com)';                       
    $string['langnemerle_ideone'] = 'Nemerle (ideone.com)';                  
    $string['langnice_ideone'] = 'Nice (ideone.com)';                     
    $string['langocaml_ideone'] = 'Ocaml (ideone.com)';                      
    $string['langoz_ideone'] = 'Oz (ideone.com)';                      
    $string['langpascal_fpc_ideone'] = 'Pascal (fpc, ideone.com)';             
    $string['langpascal_gpc_ideone'] = 'Pascal (gpc, ideone.com)';            
    $string['langperl_ideone'] = 'Perl (ideone.com)';              
    $string['langphp_ideone'] = 'PHP (ideone.com)';            
    $string['langpike_ideone'] = 'Pike (ideone.com)';            
    $string['langprolog_gnu_ideone'] = 'Prolog (gnu, ideone.com)';   
    $string['langprolog_swi_ideone'] = 'Prolog (swi, ideone.com)';      
    $string['langpython_ideone'] = 'Python (ideone.com)';             
    $string['langpython3_ideone'] = 'Python3 (ideone.com)';             
    $string['langr_ideone'] = 'R (ideone.com)';             
    $string['langruby_ideone'] = 'Ruby (ideone.com)';             
    $string['langscala_ideone'] = 'Scala (ideone.com)';             
    $string['langscheme_guile_ideone'] = 'Scheme (guile, ideone.com)';    
    $string['langsmalltalk_ideone'] = 'Smalltalk (ideone.com)';          
    $string['langtcl_ideone'] = 'Tcl (ideone.com)';              
    $string['langtext_ideone'] = 'Text (ideone.com)';               
    $string['langunlambda_ideone'] = 'Unlambda (ideone.com)';         
    $string['langvbdotnet_ideone'] = 'Visual Basic .NET (ideone.com)'; 
    $string['langwhitespace_ideone'] = 'Whitespace (ideone.com)';         
    $string['managetestcases'] = 'Manage testcases';
    $string['maxcpuusage'] = 'Maximum CPU usage';
    $string['maximumfilesize'] = 'Maximum source file size';
    $string['maxmemusage'] = 'Maximum memory usage';
    $string['memlimit'] = 'Maximum memory usage';
    $string['nosuchrecord'] = 'There is no such record in database';
    $string['nosuchlanguage'] = 'There is no such supported language';
    $string['output'] = 'Output';
    $string['outputfile'] = 'Output file';
    $string['onlinejudge2'] = 'Onlinejudge2 @Moodle';
    $string['privileges'] = '<p>Students privileges:XXXX</p>
    						 <p>Teacher privileges:XXXXX</p>';
    $string['privilegesnone'] = 'You have no privilege!!!';
    $string['ratiope'] = 'Ratio for presentation error';
    $string['rejudge'] = 'Rejudge';
    $string['rejudgeall'] = 'Rejudge all';
    $string['rejudgeallnotice'] = 'Are you sure to rejude all submissions in $a?';
    $string['rejudgefailed'] = 'Can not submitted rejudge request.';
    $string['rejudgesuccess'] = 'Rejudge request has been submitted successfully.';
    $string['runtimeout'] = 'Runtime output';
    $string['statistics'] = 'Statistics';
    $string['status0'] = 'Pending...';
    $string['status1'] = '<font color=red>Accepted</font>';
    $string['status2'] = 'Abnormal Termination';
    $string['status3'] = 'Compilation Error';
    $string['status4'] = 'Compilation Ok';
    $string['status5'] = 'Memory-Limit Exceed';
    $string['status6'] = 'Output-Limit Exceed';
    $string['status7'] = 'Presentation Error';
    $string['status9'] = 'Runtime Error';
    $string['status8'] = 'Restricted Functions';
    $string['status10'] = 'Time-Limit Exceed';
    $string['status11'] = 'Wrong answer';
    $string['status21'] = 'Internal Error';
    $string['status22'] = 'Judging...';
    $string['status23'] = 'Multi-status';
    $string['successrate'] = 'Success rate';
    $string['testcases'] = 'Test Cases';
    $string['typeonlinejudge'] = 'Online Judge';
    $string['usefile'] = 'Testcase from files';
?>

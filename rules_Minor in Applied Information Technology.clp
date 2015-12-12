; #################### THIS FILE WAS GENERATE BY build.php #################### 
; #################### AUTOGEN RULE FOR COURSE 60-104
 (defrule can-take-60-104 "Eligible for 60-104?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
	(cur-term (term s)) 
)
 ;------- conditions for prerequisite 

;------- conditions for anti requisite

 (not (black-list (course 60-104)))
 (not (has-taken (course 60-104)))
 => 
 (assert (can-take (course 60-104)))) 

; #################### AUTOGEN RULE FOR COURSE 60-106
 (defrule can-take-60-106 "Eligible for 60-106?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
)
 ;------- conditions for prerequisite 

;------- conditions for anti requisite
(not (or 	 (has-taken (course 60-140)) 
))
(not (or 	 (has-taken (course 60-140)) 
))

 (not (black-list (course 60-106)))
 (not (has-taken (course 60-106)))
 => 
 (assert (can-take (course 60-106)))) 

; #################### AUTOGEN RULE FOR COURSE 60-205
 (defrule can-take-60-205 "Eligible for 60-205?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
	(cur-term (term s)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-104)) 
	 (has-taken (course 60-106)) 
	 (has-taken (course 60-140)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-205)))
 (not (has-taken (course 60-205)))
 => 
 (assert (can-take (course 60-205)))) 

; #################### AUTOGEN RULE FOR COURSE 60-207
 (defrule can-take-60-207 "Eligible for 60-207?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-104)) 
	 (has-taken (course 60-205)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-207)))
 (not (has-taken (course 60-207)))
 => 
 (assert (can-take (course 60-207)))) 

; #################### AUTOGEN RULE FOR COURSE 60-209
 (defrule can-take-60-209 "Eligible for 60-209?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
	(cur-term (term s)) 
)
 ;------- conditions for prerequisite 

;------- conditions for anti requisite

 (not (black-list (course 60-209)))
 (not (has-taken (course 60-209)))
 => 
 (assert (can-take (course 60-209)))) 

; #################### AUTOGEN RULE FOR COURSE 60-270
 (defrule can-take-60-270 "Eligible for 60-270?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-205)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-270)))
 (not (has-taken (course 60-270)))
 => 
 (assert (can-take (course 60-270)))) 

; #################### AUTOGEN RULE FOR COURSE 60-305
 (defrule can-take-60-305 "Eligible for 60-305?"
 ;------- conditions for terms 
(or	(cur-term (term w)) 
	(cur-term (term s)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-104)) 
	 (has-taken (course 60-205)) 
)
(or 	 (has-taken (course 60-104)) 
	 (has-taken (course 60-205)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-305)))
 (not (has-taken (course 60-305)))
 => 
 (assert (can-take (course 60-305)))) 

; #################### AUTOGEN RULE FOR COURSE 60-307
 (defrule can-take-60-307 "Eligible for 60-307?"
 ;------- conditions for terms 
(or	(cur-term (term w)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-270)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-307)))
 (not (has-taken (course 60-307)))
 => 
 (assert (can-take (course 60-307)))) 


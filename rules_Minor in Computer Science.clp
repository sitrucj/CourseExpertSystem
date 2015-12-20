; #################### THIS FILE WAS GENERATE BY build.php #################### 
; #################### AUTOGEN RULE FOR COURSE 60-140
 (defrule can-take-60-140 "Eligible for 60-140?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
	(cur-term (term s)) 
)
 ;------- conditions for prerequisite 

;------- conditions for anti requisite
(not (or 	 (has-taken (course 60-106)) 
))

 (not (black-list (course 60-140)))
 (not (has-taken (course 60-140)))
 => 
 (assert (can-take (course 60-140)))) 

; #################### AUTOGEN RULE FOR COURSE 60-141
 (defrule can-take-60-141 "Eligible for 60-141?"
 ;------- conditions for terms 
(or	(cur-term (term w)) 
	(cur-term (term s)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-100)) 
	 (has-taken (course 62-140)) 
	 (has-taken (course 60-140)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-141)))
 (not (has-taken (course 60-141)))
 => 
 (assert (can-take (course 60-141)))) 

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

; #################### AUTOGEN RULE FOR COURSE 60-212
 (defrule can-take-60-212 "Eligible for 60-212?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
	(cur-term (term s)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-141)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-212)))
 (not (has-taken (course 60-212)))
 => 
 (assert (can-take (course 60-212)))) 

; #################### AUTOGEN RULE FOR COURSE 60-254
 (defrule can-take-60-254 "Eligible for 60-254?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-100)) 
	 (has-taken (course 60-141)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-254)))
 (not (has-taken (course 60-254)))
 => 
 (assert (can-take (course 60-254)))) 

; #################### AUTOGEN RULE FOR COURSE 60-256
 (defrule can-take-60-256 "Eligible for 60-256?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-141)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-256)))
 (not (has-taken (course 60-256)))
 => 
 (assert (can-take (course 60-256)))) 

; #################### AUTOGEN RULE FOR COURSE 60-265
 (defrule can-take-60-265 "Eligible for 60-265?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
	(cur-term (term s)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-140)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-265)))
 (not (has-taken (course 60-265)))
 => 
 (assert (can-take (course 60-265)))) 

; #################### AUTOGEN RULE FOR COURSE 60-100
 (defrule can-take-60-100 "Eligible for 60-100?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
)
 ;------- conditions for prerequisite 
(or )

;------- conditions for anti requisite
(not (or ))

 (not (black-list (course 60-100)))
 (not (has-taken (course 60-100)))
 => 
 (assert (can-take (course 60-100)))) 


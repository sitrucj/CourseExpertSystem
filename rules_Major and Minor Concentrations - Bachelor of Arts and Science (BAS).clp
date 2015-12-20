; #################### THIS FILE WAS GENERATE BY build.php #################### 
; #################### AUTOGEN RULE FOR COURSE 62-140
 (defrule can-take-62-140 "Eligible for 62-140?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
	(cur-term (term s)) 
)
 ;------- conditions for prerequisite 

;------- conditions for anti requisite
(not (or 	 (has-taken (course 62-130)) 
	 (has-taken (course 62-139)) 
))

 (not (black-list (course 62-140)))
 (not (has-taken (course 62-140)))
 => 
 (assert (can-take (course 62-140)))) 

; #################### AUTOGEN RULE FOR COURSE 62-141
 (defrule can-take-62-141 "Eligible for 62-141?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
	(cur-term (term s)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 62-139)) 
	 (has-taken (course 62-140)) 
)

;------- conditions for anti requisite

 (not (black-list (course 62-141)))
 (not (has-taken (course 62-141)))
 => 
 (assert (can-take (course 62-141)))) 

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

; #################### AUTOGEN RULE FOR COURSE 60-315
 (defrule can-take-60-315 "Eligible for 60-315?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-254)) 
	 (has-taken (course 60-256)) 
	 (has-taken (course 62-265)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-315)))
 (not (has-taken (course 60-315)))
 => 
 (assert (can-take (course 60-315)))) 

; #################### AUTOGEN RULE FOR COURSE 60-322
 (defrule can-take-60-322 "Eligible for 60-322?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
	(cur-term (term s)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-212)) 
	 (has-taken (course 60-254)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-322)))
 (not (has-taken (course 60-322)))
 => 
 (assert (can-take (course 60-322)))) 

; #################### AUTOGEN RULE FOR COURSE 60-330
 (defrule can-take-60-330 "Eligible for 60-330?"
 ;------- conditions for terms 
(or	(cur-term (term w)) 
	(cur-term (term s)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-212)) 
	 (has-taken (course 60-254)) 
	 (has-taken (course 60-256)) 
	 (has-taken (course 60-265)) 
	 (has-taken (course 62-266)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-330)))
 (not (has-taken (course 60-330)))
 => 
 (assert (can-take (course 60-330)))) 

; #################### AUTOGEN RULE FOR COURSE 60-334
 (defrule can-take-60-334 "Eligible for 60-334?"
 ;------- conditions for terms 
(or	(cur-term (term w)) 
	(cur-term (term s)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-212)) 
	 (has-taken (course 60-254)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-334)))
 (not (has-taken (course 60-334)))
 => 
 (assert (can-take (course 60-334)))) 

; #################### AUTOGEN RULE FOR COURSE 60-367
 (defrule can-take-60-367 "Eligible for 60-367?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-212)) 
	 (has-taken (course 60-254)) 
	 (has-taken (course 60-256)) 
	 (has-taken (course 60-265)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-367)))
 (not (has-taken (course 60-367)))
 => 
 (assert (can-take (course 60-367)))) 

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


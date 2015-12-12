; #################### THIS FILE WAS GENERATE BY build.php #################### 
; #################### AUTOGEN RULE FOR COURSE 62-120
 (defrule can-take-62-120 "Eligible for 62-120?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
	(cur-term (term s)) 
)
 ;------- conditions for prerequisite 

;------- conditions for anti requisite
(not (or 	 (has-taken (course 62-125)) 
))

 (not (black-list (course 62-120)))
 (not (has-taken (course 62-120)))
 => 
 (assert (can-take (course 62-120)))) 

; #################### AUTOGEN RULE FOR COURSE 62-125
 (defrule can-take-62-125 "Eligible for 62-125?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
	(cur-term (term s)) 
)
 ;------- conditions for prerequisite 

;------- conditions for anti requisite
(not (or 	 (has-taken (course 62-120)) 
))

 (not (black-list (course 62-125)))
 (not (has-taken (course 62-125)))
 => 
 (assert (can-take (course 62-125)))) 

; #################### AUTOGEN RULE FOR COURSE 62-130
 (defrule can-take-62-130 "Eligible for 62-130?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
	(cur-term (term s)) 
)
 ;------- conditions for prerequisite 

;------- conditions for anti requisite
(not (or 	 (has-taken (course 62-140)) 
	 (has-taken (course 62-139)) 
))

 (not (black-list (course 62-130)))
 (not (has-taken (course 62-130)))
 => 
 (assert (can-take (course 62-130)))) 

; #################### AUTOGEN RULE FOR COURSE 62-139
 (defrule can-take-62-139 "Eligible for 62-139?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
	(cur-term (term s)) 
)
 ;------- conditions for prerequisite 

;------- conditions for anti requisite
(not (or 	 (has-taken (course 62-130)) 
	 (has-taken (course 62-140)) 
))

 (not (black-list (course 62-139)))
 (not (has-taken (course 62-139)))
 => 
 (assert (can-take (course 62-139)))) 

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

; #################### AUTOGEN RULE FOR COURSE 65-205
 (defrule can-take-65-205 "Eligible for 65-205?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
	(cur-term (term s)) 
)
 ;------- conditions for prerequisite 

;------- conditions for anti requisite
(not (or 	 (has-taken (course 65-250)) 
))

 (not (black-list (course 65-205)))
 (not (has-taken (course 65-205)))
 => 
 (assert (can-take (course 65-205)))) 

; #################### AUTOGEN RULE FOR COURSE 60-100
 (defrule can-take-60-100 "Eligible for 60-100?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
	(cur-term (term s)) 
)
 ;------- conditions for prerequisite 

;------- conditions for anti requisite

 (not (black-list (course 60-100)))
 (not (has-taken (course 60-100)))
 => 
 (assert (can-take (course 60-100)))) 

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

; #################### AUTOGEN RULE FOR COURSE 60-266
 (defrule can-take-60-266 "Eligible for 60-266?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-265)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-266)))
 (not (has-taken (course 60-266)))
 => 
 (assert (can-take (course 60-266)))) 

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

; #################### AUTOGEN RULE FOR COURSE 60-340
 (defrule can-take-60-340 "Eligible for 60-340?"
 ;------- conditions for terms 
(or	(cur-term (term w)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-212)) 
	 (has-taken (course 60-256)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-340)))
 (not (has-taken (course 60-340)))
 => 
 (assert (can-take (course 60-340)))) 

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

; #################### AUTOGEN RULE FOR COURSE 60-415
 (defrule can-take-60-415 "Eligible for 60-415?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-315)) 
	 (has-taken (course 60-330)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-415)))
 (not (has-taken (course 60-415)))
 => 
 (assert (can-take (course 60-415)))) 

; #################### AUTOGEN RULE FOR COURSE 60-420
 (defrule can-take-60-420 "Eligible for 60-420?"
 ;------- conditions for terms 
(or	(cur-term (term w)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-315)) 
	 (has-taken (course 60-322)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-420)))
 (not (has-taken (course 60-420)))
 => 
 (assert (can-take (course 60-420)))) 

; #################### AUTOGEN RULE FOR COURSE 60-422
 (defrule can-take-60-422 "Eligible for 60-422?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-322)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-422)))
 (not (has-taken (course 60-422)))
 => 
 (assert (can-take (course 60-422)))) 

; #################### AUTOGEN RULE FOR COURSE 60-425
 (defrule can-take-60-425 "Eligible for 60-425?"
 ;------- conditions for terms 
(or	(cur-term (term w)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-315)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-425)))
 (not (has-taken (course 60-425)))
 => 
 (assert (can-take (course 60-425)))) 


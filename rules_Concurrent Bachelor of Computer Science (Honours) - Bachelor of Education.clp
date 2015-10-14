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

; #################### AUTOGEN RULE FOR COURSE 62-190
 (defrule can-take-62-190 "Eligible for 62-190?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
	(cur-term (term s)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-100)) 
	 (has-taken (course 62-120)) 
	 (has-taken (course 62-125)) 
	 (has-taken (course 62-126)) 
)

;------- conditions for anti requisite

 (not (black-list (course 62-190)))
 (not (has-taken (course 62-190)))
 => 
 (assert (can-take (course 62-190)))) 

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

; #################### AUTOGEN RULE FOR COURSE 65-250
 (defrule can-take-65-250 "Eligible for 65-250?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
	(cur-term (term s)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 62-141)) 
)

;------- conditions for anti requisite
(not (or 	 (has-taken (course 65-205)) 
))

 (not (black-list (course 65-250)))
 (not (has-taken (course 65-250)))
 => 
 (assert (can-take (course 65-250)))) 

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
)
(or 	 (has-taken (course 60-140)) 
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

; #################### AUTOGEN RULE FOR COURSE 60-214
 (defrule can-take-60-214 "Eligible for 60-214?"
 ;------- conditions for terms 
(or	(cur-term (term w)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-100)) 
)
(or 	 (has-taken (course 60-212)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-214)))
 (not (has-taken (course 60-214)))
 => 
 (assert (can-take (course 60-214)))) 

; #################### AUTOGEN RULE FOR COURSE 60-231
 (defrule can-take-60-231 "Eligible for 60-231?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-100)) 
)
(or 	 (has-taken (course 62-190)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-231)))
 (not (has-taken (course 60-231)))
 => 
 (assert (can-take (course 60-231)))) 

; #################### AUTOGEN RULE FOR COURSE 60-254
 (defrule can-take-60-254 "Eligible for 60-254?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-100)) 
)
(or 	 (has-taken (course 60-141)) 
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

; #################### AUTOGEN RULE FOR COURSE 60-311
 (defrule can-take-60-311 "Eligible for 60-311?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-212)) 
)
(or 	 (has-taken (course 60-254)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-311)))
 (not (has-taken (course 60-311)))
 => 
 (assert (can-take (course 60-311)))) 

; #################### AUTOGEN RULE FOR COURSE 60-315
 (defrule can-take-60-315 "Eligible for 60-315?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-254)) 
)
(or 	 (has-taken (course 60-256)) 
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
)
(or 	 (has-taken (course 60-254)) 
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
)
(or 	 (has-taken (course 60-254)) 
)
(or 	 (has-taken (course 60-256)) 
)
(or 	 (has-taken (course 60-265)) 
	 (has-taken (course 62-266)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-330)))
 (not (has-taken (course 60-330)))
 => 
 (assert (can-take (course 60-330)))) 

; #################### AUTOGEN RULE FOR COURSE 60-354
 (defrule can-take-60-354 "Eligible for 60-354?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-214)) 
)
(or 	 (has-taken (course 60-231)) 
)
(or 	 (has-taken (course 60-254)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-354)))
 (not (has-taken (course 60-354)))
 => 
 (assert (can-take (course 60-354)))) 

; #################### AUTOGEN RULE FOR COURSE 60-367
 (defrule can-take-60-367 "Eligible for 60-367?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-212)) 
)
(or 	 (has-taken (course 60-254)) 
)
(or 	 (has-taken (course 60-256)) 
)
(or 	 (has-taken (course 60-265)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-367)))
 (not (has-taken (course 60-367)))
 => 
 (assert (can-take (course 60-367)))) 

; #################### AUTOGEN RULE FOR COURSE 60-440
 (defrule can-take-60-440 "Eligible for 60-440?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-214)) 
)
(or 	 (has-taken (course 60-231)) 
)
(or 	 (has-taken (course 60-254)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-440)))
 (not (has-taken (course 60-440)))
 => 
 (assert (can-take (course 60-440)))) 

; #################### AUTOGEN RULE FOR COURSE 60-454
 (defrule can-take-60-454 "Eligible for 60-454?"
 ;------- conditions for terms 
(or	(cur-term (term w)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-231)) 
)
(or 	 (has-taken (course 60-254)) 
)
(or 	 (has-taken (course 60-354)) 
)

;------- conditions for anti requisite

 (not (black-list (course 60-454)))
 (not (has-taken (course 60-454)))
 => 
 (assert (can-take (course 60-454)))) 

; #################### AUTOGEN RULE FOR COURSE 60-496
 (defrule can-take-60-496 "Eligible for 60-496?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
	(cur-term (term s)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-311)) 
	 (has-taken (course 60-315)) 
	 (has-taken (course 60-322)) 
	 (has-taken (course 60-330)) 
	 (has-taken (course 60-334)) 
	 (has-taken (course 60-340)) 
	 (has-taken (course 60-350)) 
	 (has-taken (course 60-352)) 
	 (has-taken (course 60-354)) 
	 (has-taken (course 60-367)) 
	 (has-taken (course 60-368)) 
	 (has-taken (course 60-371)) 
	 (has-taken (course 60-375)) 
	 (has-taken (course 60-376)) 
	 (has-taken (course 60-377)) 
)

;------- conditions for anti requisite
(not (or 	 (has-taken (course 60-499)) 
))

 (not (black-list (course 60-496)))
 (not (has-taken (course 60-496)))
 => 
 (assert (can-take (course 60-496)))) 

; #################### AUTOGEN RULE FOR COURSE 60-499
 (defrule can-take-60-499 "Eligible for 60-499?"
 ;------- conditions for terms 
(or	(cur-term (term f)) 
	(cur-term (term w)) 
	(cur-term (term s)) 
)
 ;------- conditions for prerequisite 
(or 	 (has-taken (course 60-311)) 
	 (has-taken (course 60-315)) 
	 (has-taken (course 60-322)) 
	 (has-taken (course 60-330)) 
	 (has-taken (course 60-334)) 
	 (has-taken (course 60-340)) 
	 (has-taken (course 60-350)) 
	 (has-taken (course 60-352)) 
	 (has-taken (course 60-354)) 
	 (has-taken (course 60-367)) 
	 (has-taken (course 60-368)) 
	 (has-taken (course 60-371)) 
	 (has-taken (course 60-375)) 
	 (has-taken (course 60-376)) 
	 (has-taken (course 60-377)) 
)

;------- conditions for anti requisite
(not (or 	 (has-taken (course 60-496)) 
))

 (not (black-list (course 60-499)))
 (not (has-taken (course 60-499)))
 => 
 (assert (can-take (course 60-499)))) 




; --------------- TEMPLATES
(deftemplate has-taken "Represents a course taken"
   (slot course))
(deftemplate can-take "Represents a course the student can take"
   (slot course))
(deftemplate black-list "Represents a course the student can not take"
   (slot course))
(deftemplate cur-term "Represents term student (s,f,w)"
   (slot term))

; ---- (load "c:/xampp/htdocs/expert/rules_General.clp")

(defrule startup0 "initalize variables"
	=>
	(assert (currCounter 0))
)
; ---------------- entry point : ask for term

; ---------------------
(defrule startup "Whats the term?"
	(not (cur-term (term ?)))
	=>
	
	(printout t "type term: ")
	(bind ?answer (read))
	(printout t "the term you selected is: " ?answer crlf)
	(assert (cur-term (term ?answer)))
	(assert (phase addMoreCourses))
)
; ---------------------


; --------------------- ask for courses
; #######################
(defrule courseSelect
 (phase addMoreCourses) ; control pattern
 =>
 (printout t "Have you taken any courses (y/n)? : ")
 (assert (courseSelect (read)))) ; reads y or no
 
 
; and asserts it in momory
(defrule if-no
 ?phase <- (phase addMoreCourses)
 ?choice <- (courseSelect ?player&n | no) ; if the user has inputed n or no
 =>
 (retract ?phase ?choice)
 (assert (courseCompleted ?player)))
 
 
(defrule if-yes ; if yes, then ask user for course # and go back to  courseSelect rule.
 ?phase <- (phase addMoreCourses)
 ?choice <- (courseSelect ?player&~c&~h)

 =>
	 (retract ?phase ?choice)
	 (assert (phase addMoreCourses))
	; ------ ask user about the course # and assert it.
	(printout t "type the course: ")
	(bind ?answer (read))
	(assert  (has-taken (course ?answer)))
	
	  
 )

	

; ---------------- response
; ---------------------
	(defrule startup2 "Response"
		(cur-term (term ?x))
		?course <-(can-take (course ?cname))
		(courseCompleted ?f)
		(not (termchanged yes))
		=>
		(printout t " You are eligible for this course : <b>" ?cname "</b>" crlf	)
		(retract ?course) ; --- remove it.
		(assert  (black-list (course ?cname)))
		(assert (listingdone yes) ) ; -- next semester
)
; ---------------- get black list into has-taken
	(defrule startupBlackListCheck "Response"
		?course <-(black-list (course ?cname))
		?termc  <- (termchanged yes)
		=>
		;(printout t " adding course to has-taken : " ?cname  crlf	)
		(assert  (has-taken (course ?cname)))
		(retract ?course)
)
; ---------------- remove termchanged fact when  black list empty.
	(defrule startupBlackListCheck1 "Response"
		(not (black-list (course ?cname)))
		?termc  <- (termchanged yes)
		=>	
		(retract ?termc)
)


; ---------------- sequnce for summer
; ---------------------
	(defrule startupSemester1 "Response123"
		(declare (salience -10))
		?term<-(cur-term (term w))
		(courseCompleted ?f)
		(listingdone yes)
		(not (can-take (course ?)))
		?cnn <-	(currCounter ?xd)
		(not (currCounter 2))
		=>
		(printout t " <br /> <font style='font-size:14px;'>For summer you can take from the following</font>" crlf	)
		(retract ?term) 
		(assert (cur-term (term s)) ) ; -- next semester
		(assert (termchanged yes) ) ; -- next semester
		(bind ?num (+ ?xd 1))
		(retract ?cnn)
		(assert (currCounter ?num))
		
		
)

; ---------------- sequnce for fall
; ---------------------
	(defrule startupSemester2 "Response123"
		(declare (salience -10))
		?term<-(cur-term (term s))
		(courseCompleted ?f)
		
		(listingdone yes)
		(not (can-take (course ?)))
		?cnn <-	(currCounter ?xd)
		(not (currCounter 2))
		=>
		(printout t " <br /> <font style='font-size:14px;'>For fall you can take from the following</font>" crlf	)
		(retract ?term) 
		(assert (cur-term (term f)) ) ; -- next semester
		(assert (termchanged yes) ) ; -- next semester
		(bind ?num (+ ?xd 1))
		(retract ?cnn)
		(assert (currCounter ?num))
		
)

; ---------------- sequnce for winter
; ---------------------
	(defrule startupSemester3 "Response123"
		(declare (salience -10))
		?term<-(cur-term (term f))
		(courseCompleted ?f)
		
		(listingdone yes)
		(not (can-take (course ?)))
		?cnn <-	(currCounter ?xd)
		(not (currCounter 2))
		=>
		(printout t " <br /> <font style='font-size:14px;'>For winter you can take from the following</font>" crlf	)
		(retract ?term) 
		(assert (cur-term (term w)) ) ; -- next semester
		(assert (termchanged yes) ) ; -- next semester
	(bind ?num (+ ?xd 1))
		(retract ?cnn)
		(assert (currCounter ?num))
		
)








   

; ------------------- ADDITIONAL RULES TO REMOVE DUPLICATED OR COURSES THAT HAS BEEN TAKEN.
; ---------------- remove has taken rule
; ---------------------
	(defrule startup4 "Response"
		(has-taken (course ?x))
		 ?record <- (can-take (course ?x))
		=>
		(retract ?record)
		(printout t " AUTO Course removed " ?x  crlf	)
		
)




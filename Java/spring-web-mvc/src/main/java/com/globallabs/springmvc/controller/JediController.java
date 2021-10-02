package com.globallabs.springmvc.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.servlet.ModelAndView;

@Controller
public class JediController {
	
	@GetMapping("/jedi")
	public ModelAndView getJedi()
	{
		return new ModelAndView("jedi.html");
	}
}

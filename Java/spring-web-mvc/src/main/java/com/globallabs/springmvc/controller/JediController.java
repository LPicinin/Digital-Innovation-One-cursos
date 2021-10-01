package com.globallabs.springmvc.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class JediController {
	
	@GetMapping("/jedi")
	public String getJedi()
	{
		return "jedi";
	}
}

<?php
/**
 * Included Recipes
 *
 ** By Alena Holligan **
 * I use whole wheat pastry flour or whole wheat white flour
 * in all my recipes, but feel free to use whatever you like
 *
 * $lemon_chicken
 * $granola_muffins
 * $belgian_waffles
 * $pepper_casserole
 * $lasagna
 *
 *
 ** By Ken Alger **
 *
 * $dried_mushroom_ragout
 * $rabbit_catalan
 * $grilled_salmon_with_fennel
 * $pistachio_duck
 * $chili_pork
 * $crab_cakes
 * $beef_medallions
 * $silver_dollar_cakes
 * $french_toast
 * $corn_beef_hash
 * $granola
 * $spicy_omelette
 * $scones
 *
*/

$lemon_chicken = new Recipe("Italian Lemon Chicken");

$lemon_chicken->addIngredient("Pasta", 1, "lb");
$lemon_chicken->addIngredient("Chicken Breast", 2, "lb");
$lemon_chicken->addIngredient("olive oil", .5, "Cup");
$lemon_chicken->addIngredient("garlic, chopped", 2, "tbsp");
$lemon_chicken->addIngredient("lemon juice", .25, "Cup");
$lemon_chicken->addIngredient("sugar", .5, "tsp");
$lemon_chicken->addIngredient("parsley", 2, "tsp");
$lemon_chicken->addIngredient("oregano", 2, "tsp");
$lemon_chicken->addIngredient("basil", 1, "tbsp");
$lemon_chicken->addIngredient("parmesian cheese to taste");

$lemon_chicken->addInstructions("Cook pasta according to package directions");
$lemon_chicken->addInstructions("In a large skillet on medium high heat, saute garlic in olive oil for 3 minutes. Cut chicken into bite sized pieces.");
$lemon_chicken->addInstructions("Add additional items to sauce pan and cover for 5 minutes or untill chicken is almost completely white.");
$lemon_chicken->addInstructions("Remove lid and cook until reduced to a thick sauce.");
$lemon_chicken->addInstructions("Serve over pasta with parmesian cheese to taste");

$lemon_chicken->setYield("6 Servings");
$lemon_chicken->addTags("Main Dish", "Dinner");


$granola_muffins = new Recipe("Granola Muffins");

$granola_muffins->addIngredient("egg", 2);
$granola_muffins->addIngredient("sugar", .25, "Cup");
$granola_muffins->addIngredient("oil", .5, "Cup");
$granola_muffins->addIngredient("milk", 1, "Cup");
$granola_muffins->addIngredient("vanilla", 1, "tsp");
$granola_muffins->addIngredient("white vinegar", .5, "tsp");
$granola_muffins->addIngredient("granola", 2, "Cup");
$granola_muffins->addIngredient("flour", 1, "Cup");
$granola_muffins->addIngredient("instant protein", 4, "tbsp");
$granola_muffins->addIngredient("baking powder", 2, "tsp");
$granola_muffins->addIngredient("cinnamon", 2, "tsp");
$granola_muffins->addIngredient("baking soda", .5, "tsp");
$granola_muffins->addIngredient("salt", .5, "tsp");

$granola_muffins->addInstructions("In a large bowl, combine wet items");
$granola_muffins->addInstructions("In a smaller bowl, dry items");
$granola_muffins->addInstructions("Combine wet and dry mixtures and fold together gently until just mixed. Spoon into a sprayed muffin pan. Sprinkle each muffin top with granola if desired. Bake at 400 for 15 to 20 minutes. Remove from pan and cool on rack.");
$granola_muffins->addInstructions("*An hour before you want to make these (or at least a half hour) mix your milk of choice with the white vinegar and allow it to \"sour\" at room temperature.");

$granola_muffins->setYield("12 large muffins.");
$granola_muffins->addTags("breakfast, snack, quick bread");/**/


$belgian_waffles = new Recipe("Belgian Waffles");

$belgian_waffles->addIngredient("Egg", 2);
$belgian_waffles->addIngredient("Butter", 1, "Cup");
$belgian_waffles->addIngredient("sugar", .5, "Cup");
$belgian_waffles->addIngredient("milk", 1.5, "cup");
$belgian_waffles->addIngredient("vanilla", 2, "tsp");
$belgian_waffles->addIngredient("flour", 2, "cup");
$belgian_waffles->addIngredient("baking powder", 1, "tbsp");

$belgian_waffles->addInstructions("Separate eggs. Whip egg whites until stiff peaks form. Set asside.");
$belgian_waffles->addInstructions("Melt butter, and combine with sugar. Add egg yokes and mix well.");
$belgian_waffles->addInstructions("Add milk and vanilla and mix well.");
$belgian_waffles->addInstructions("Add flour and sugar until just combined. ");
$belgian_waffles->addInstructions("Fold in egg whites.");
$belgian_waffles->addInstructions("Follow instructions on waffle maker or add .5 cup of batter to waffle iron and cook for 4 minutes.");

$belgian_waffles->setYield("10 waffles");
$belgian_waffles->setSource("Alena Holligan");
$belgian_waffles->addTags("breakfast, quick bread");


$pepper_casserole = new Recipe("Ground Turkey Pepper Casserole");

$pepper_casserole->addIngredient("bell peppers", 6);
$pepper_casserole->addIngredient("Ground Turkey", 1.5, "lb");
$pepper_casserole->addIngredient("Garlic cloves", 2);
$pepper_casserole->addIngredient("onion", 1);
$pepper_casserole->addIngredient("rice, cooked", 2, "cup");
$pepper_casserole->addIngredient("salt", 1, "tsp");
$pepper_casserole->addIngredient("tomato sauce", 15, "oz");
$pepper_casserole->addIngredient("Cheddar Cheese", 8, "oz");

$pepper_casserole->addInstructions("Cut peppers into bite sized pieces. In 4-quart pan, add enough water to cover peppers. Heat to boiling; add peppers. Cook about 4 minutes; drain.");
$pepper_casserole->addInstructions("In 10-inch skillet, cook turkey, garlic and onion over medium heat 8 to 10 minutes, stirring occasionally, until beef is brown; drain.");
$pepper_casserole->addInstructions("Stir in cooked rice, salt and 1 cup of the tomato sauce; cook until hot.");
$pepper_casserole->addInstructions("Pre-heat oven to 350°F.");
$pepper_casserole->addInstructions("Add turky and rice mixture to a 9x13in baking dish. Spread peppers over the rix mixture and poor the remaining tomato sauce over peppers.");
$pepper_casserole->addInstructions("Cover tightly with foil. Bake 10 minutes. Uncover and Sprinkle with cheese. Bake about 10 minutes longer or until peppers are tender and cheese is melted.");

$pepper_casserole->setYield("8 servings");
$pepper_casserole->setSource("Alena Holligan");
$pepper_casserole->addTags("dinner");


$lasagna = new Recipe("Lasagna");

$lasagna->addIngredient("Lasagna Noodles", 1, "lb");
$lasagna->addIngredient("Sweet Italian Sausage", 1, "lb");
$lasagna->addIngredient("Hot Italian Sausage", 1, "lb");
$lasagna->addIngredient("Sweet Onion", 2);
$lasagna->addIngredient("Garlic, chopped", 4, "tbsp");
$lasagna->addIngredient("Tomato Sauce", 64, "oz");
$lasagna->addIngredient("Sugar", 1, "tsp");
$lasagna->addIngredient("Oregano", 2, "tbsp");
$lasagna->addIngredient("Parsley", 2, "tbsp");
$lasagna->addIngredient("Basil", 4, "tbsp");
$lasagna->addIngredient("Salt & Pepper to taste");
$lasagna->addIngredient("Ricotta Cheese", 8, "oz");
$lasagna->addIngredient("Mozzarella Cheese", 16, "oz");
$lasagna->addIngredient("Parmesan cheese, grated", .75, "cup");

$lasagna->addInstructions("In a large skillet, brown sausage over medium high heat, with onions and garlic.");
$lasagna->addInstructions("In a large bowl combine tomato sauce, sugar, seasonings, ricotta cheese and sausage mixture. Mix until ricotta cheese is smooth.");
$lasagna->addInstructions("Preheat oven to 375 degrees F (190 degrees C).");
$lasagna->addInstructions("To assemble, spread 1 1/2 cups of sauce mixture in the bottom of a 9x13 inch baking dish. Arrange UNCOOKED noodles over sauce. Spread with a third of the remaining sauce mixture. Top with a third of the gratted mozzarella cheese. Sprinkle with 1/4 cup Parmesan cheese. Repeat layers of noodles, sauce mixture and cheese 2 more times. Cover with foil: to prevent sticking, either spray foil with cooking spray, or make sure the foil does not touch the cheese.");
$lasagna->addInstructions("Bake in preheated oven for 60 minutes. Remove foil, and bake an additional 15 minutes. Cool for 15 minutes before serving.");

$lasagna->setYield("12 servings");
$lasagna->setSource("Alena Holligan");
$lasagna->addTags("dinner,italian");


//Ken Alger
$dried_mushroom_ragout = new Recipe("Dried Mushroom Ragout");

$dried_mushroom_ragout->addIngredient("Pearl Onion", 11, "oz");
$dried_mushroom_ragout->addIngredient("Assorted Dried Mushrooms (morels, black fungus, shiitake", 1.3, "oz");
$dried_mushroom_ragout->addIngredient("Butter", 2, "oz");
$dried_mushroom_ragout->addIngredient("Olive Oil", 2, "tsp");
$dried_mushroom_ragout->addIngredient("Salt & Pepper to taste");
$dried_mushroom_ragout->addIngredient("Sour Cream", 3.5, "oz");

$dried_mushroom_ragout->addInstructions("Trim ends off pearl onions.");
$dried_mushroom_ragout->addInstructions("Cover with boiling water and let stand for one minute.");
$dried_mushroom_ragout->addInstructions("Drain and slip off skins.");
$dried_mushroom_ragout->addInstructions("Cook the onions in boiling water for 5 minutes.");
$dried_mushroom_ragout->addInstructions("Drain well and spread out on dry paper towels.");
$dried_mushroom_ragout->addInstructions("Cover the mushrooms generously with hot water and let soak for thirty minutes.");
$dried_mushroom_ragout->addInstructions("Pick out the mushrooms.");
$dried_mushroom_ragout->addInstructions("Strain water through a sieve lined with a double layer of cheesecloth.");
$dried_mushroom_ragout->addInstructions("Add enough water to make 2 cups.");
$dried_mushroom_ragout->addInstructions("Reserve liquid.");
$dried_mushroom_ragout->addInstructions("Fry the mushrooms gently in butter and oil for two minutes.");
$dried_mushroom_ragout->addInstructions("Add the onions, salt, pepper, and soaking liquid from the mushrooms.");
$dried_mushroom_ragout->addInstructions("Simmer until virtually all the liquid has evaporated.");
$dried_mushroom_ragout->addInstructions("Stir in the sour cream and simmer for a couple of minutes longer until slightly reduced.");
$dried_mushroom_ragout->addInstructions("Taste and adjust the seasoning and serve.");

$dried_mushroom_ragout->setYield("5, 4 ounce servings.");

$dried_mushroom_ragout->setSource("Alice Kingsleigh");

$dried_mushroom_ragout->addTags("dinner");



$rabbit_catalan = new Recipe("Rabbit Catalan");

$rabbit_catalan->addIngredient("Raisins", 1.5, "oz");
$rabbit_catalan->addIngredient("Rabbit", 14, "oz");
$rabbit_catalan->addIngredient("Seasoned flour");
$rabbit_catalan->addIngredient("Olive Oil", 4.5, "tsp");
$rabbit_catalan->addIngredient("Onions", .75);
$rabbit_catalan->addIngredient("Tomatoes, skinned, liquidized, and strained", 12, "oz");
$rabbit_catalan->addIngredient("Rabbit stock", 7.5, "oz");
$rabbit_catalan->addIngredient("Rosemary spring", 1);
$rabbit_catalan->addIngredient("Bay leaf", .5);
$rabbit_catalan->addIngredient("Parsley, finely chopped", 1.5, "tbsp");
$rabbit_catalan->addIngredient("Salt & Pepper to taste");
$rabbit_catalan->addIngredient("Garlic cloves", 2);
$rabbit_catalan->addIngredient("Blanched almonds", 10);
$rabbit_catalan->addIngredient("Hazlenuts", 10);
$rabbit_catalan->addIngredient("Saffron threads", .25, "tsp");
$rabbit_catalan->addIngredient("Xocolata a la pedra", .5, "oz");

$rabbit_catalan->addInstructions("Cover the raisins with water and soak 20 minutes.");
$rabbit_catalan->addInstructions("Coat the rabbit in the seasoned flour and brown in olive oil. Set aside.");
$rabbit_catalan->addInstructions("In the same oil, saute the onion until tender and golden.");
$rabbit_catalan->addInstructions("Add the tomatoes, stock, rosemary, bay leaf, half of the parsley, salt and pepper.");
$rabbit_catalan->addInstructions("Simmer gently roughly five minutes.");
$rabbit_catalan->addInstructions("Return the rabbit to the pan, cover, and simmer a further 20 minutes.");
$rabbit_catalan->addInstructions("Turn the rabbit pieces occasionally, adding additional stock if necessary.");
$rabbit_catalan->addInstructions("White the rabbit is simmering, mix the remaining parsley with the garlic (chopped), almonds, hazelnuts, affron, and chocolate.");
$rabbit_catalan->addInstructions("Process in a food processor until smooth.");
$rabbit_catalan->addInstructions("Gradually work in 6.5 ounces of sauce from the rabbit.");
$rabbit_catalan->addInstructions("Spoon this mixture over the rabbit, add the raisins, drained, and stir into the mix.");
$rabbit_catalan->addInstructions("Cover again and continue simmering until the rabbit is done.");
$rabbit_catalan->addInstructions("Taste and adjust seasoning.");

$rabbit_catalan->setYield("4, 7 ounce servings.");

$rabbit_catalan->setSource("Elmer Fudd");

$rabbit_catalan->addTags("dinner");



$grilled_salmon_with_fennel = new Recipe("Grilled Salmon with Fennel");

$grilled_salmon_with_fennel->addIngredient("Olive Oil", 2, "tsp");
$grilled_salmon_with_fennel->addIngredient("White onion, finely chopped", 1.25, "cup");
$grilled_salmon_with_fennel->addIngredient("Large fennel bulbs, finely chopped", 1.25, "cup");
$grilled_salmon_with_fennel->addIngredient("Orange liquor", .25, "oz");
$grilled_salmon_with_fennel->addIngredient("Salt and Pepper to taste");
$grilled_salmon_with_fennel->addIngredient("Fresh parsley, finely chopped", 2.5, "tbsp");
$grilled_salmon_with_fennel->addIngredient("Fennel leaves, finely chopped", 5, "tsp");
$grilled_salmon_with_fennel->addIngredient("Salmon steaks, 5 ounces each", 5);
$grilled_salmon_with_fennel->addIngredient("Vegetable Oil Spray");

$grilled_salmon_with_fennel->addInstructions("Heat grill to medium-hot.");
$grilled_salmon_with_fennel->addInstructions("For the sauce, briefly heat the olive oil in a large skillet.");
$grilled_salmon_with_fennel->addInstructions("Add the onions and saute until they soften.");
$grilled_salmon_with_fennel->addInstructions("Add the fennel bulb, orange liquor, salt, and pepper.");
$grilled_salmon_with_fennel->addInstructions("Saute until the vegetables are soft.");
$grilled_salmon_with_fennel->addInstructions("Turn off the heat and cover pan to keep warm.");
$grilled_salmon_with_fennel->addInstructions("Stir in parsley and fennel leaves just prior to service.");
$grilled_salmon_with_fennel->addInstructions("Season the salmon with salt and pepper and then spray with the vegetable oil.");
$grilled_salmon_with_fennel->addInstructions("Place on grill.");
$grilled_salmon_with_fennel->addInstructions("Grill for approximately five minutes, then turn and grill for five minutes on the second side or until the fish just starts to flake.");
$grilled_salmon_with_fennel->addInstructions("Serve fish over sauce.");

$grilled_salmon_with_fennel->setYield("4, 6 ounce servings");

$grilled_salmon_with_fennel->setSource("Lord Drinian");

$grilled_salmon_with_fennel->addTags("dinner");



$pistachio_duck = new Recipe("Duck Breast in Pistachio Crust");

$pistachio_duck->addIngredient("Duck Breast", 1);
$pistachio_duck->addIngredient("Pistachios, finely chopped", 1.5, "tbsp");
$pistachio_duck->addIngredient("Wild Rice, cooked", 1/3, "cup");
$pistachio_duck->addIngredient("White Rice, cooked", 1/3, "cup");
$pistachio_duck->addIngredient("Egg plant", 1/4);
$pistachio_duck->addIngredient("Asparagus spear", 1);
$pistachio_duck->addIngredient("Duck stock", 8, "oz");
$pistachio_duck->addIngredient("Port wine", .5, "oz");
$pistachio_duck->addIngredient("Dried cranberries", 10);
$pistachio_duck->addIngredient("Shallots, minced", 1, "tsp");

$pistachio_duck->addInstructions("Press pistachios into duck breast.");
$pistachio_duck->addInstructions("Dry fry the breast to give it color, finish in a 350 F oven.");
$pistachio_duck->addInstructions("With cooked rices, combine together along with five of the cranberries that have been allowed to soak in the duck stock long enough to reconstitute.");
$pistachio_duck->addInstructions("Cut egg plant into 1/4 inch slices");
$pistachio_duck->addInstructions("Grill over medium high heat.");
$pistachio_duck->addInstructions("Steam the one asparagus spear until al dente.");
$pistachio_duck->addInstructions("For the sauce, strain any fat off the duck stock.");
$pistachio_duck->addInstructions("Dry saute the shallots just until they start to color.");
$pistachio_duck->addInstructions("Add 2 ounces stock and deglaze the pan.");
$pistachio_duck->addInstructions("Add remaining duck stock, port wine, and the other five reconstituted cranberries and reduce until thickend.");
$pistachio_duck->addInstructions("Serve the eggplant sliced and fanned over a bed of the rice.");
$pistachio_duck->addInstructions("Slice the pistachio crusted duck breast over a pool of cranberry port sauce.");

$pistachio_duck->setYield("1 serving");

$pistachio_duck->setSource("S.J. Sharkie");

$pistachio_duck->addTags("dinner");



$chili_pork = new Recipe("Pan seared pork tenderloin rolled in a chili peppercrust");

$chili_pork->addIngredient("Pork tenderloin", 6);
$chili_pork->addIngredient("Dry chilis, finely ground", 2, "cup");
$chili_pork->addIngredient("Olive oil", 1, "cup");
$chili_pork->addIngredient("Green chilis, roasted", 10);
$chili_pork->addIngredient("Garlic, chopped", 2, "tsp");
$chili_pork->addIngredient("Cilantro", 3, "tbsp");
$chili_pork->addIngredient("Chicken stock", 2, "cup");
$chili_pork->addIngredient("Lime Juice", 3, "tbsp");
$chili_pork->addIngredient("Red onion, diced", 3, "tbsp");
$chili_pork->addIngredient("Olive oil", 2, "tbsp");

$chili_pork->addInstructions("Roll the tenderloins in the ground chili's.");
$chili_pork->addInstructions("Heat a saute pan, add a little olive oil and quickly brown tenderloins.");
$chili_pork->addInstructions("Remove from saute pan an dplace in a 350 F oven for about six minutes.");
$chili_pork->addInstructions("Remove from oven and keep warm until ready to serve.");
$chili_pork->addInstructions("For the sauce, clean the chili peppers after roasting, and dice them.");
$chili_pork->addInstructions("Heat a small pot, add olive oil, red onion, roasted garlic, and chili's.");
$chili_pork->addInstructions("Saute quickly until onion and garlic soften.");
$chili_pork->addInstructions("Add the chicken stock and lime juice and simmer for four minutes.");
$chili_pork->addInstructions("Place mixture into a blender and puree until smooth.");
$chili_pork->addInstructions("Add cilantro before serving with the sliced pork.");

$chili_pork->setYield("12 portions");

$chili_pork->setSource("B.B. Wolf");

$chili_pork->addTags("dinner");



$crab_cakes = new Recipe("Crab Cakes");

$crab_cakes->addIngredient("Bell peppers, finely diced", 2, "cup");
$crab_cakes->addIngredient("Onion, finely diced", .5);
$crab_cakes->addIngredient("Celery, finely diced", 2, "cup");
$crab_cakes->addIngredient("Fresh green chili, finely diced", 3);
$crab_cakes->addIngredient("Garlic cloves", 3);
$crab_cakes->addIngredient("Vegetable oil", .5, "cup");
$crab_cakes->addIngredient("Cilantro", 2, "tbsp");
$crab_cakes->addIngredient("Flour", 1, "cup");
$crab_cakes->addIngredient("Eggs, whipped", 2);
$crab_cakes->addIngredient("Milk, hot", 1, "cup");
$crab_cakes->addIngredient("Dijon Mustard", .25, "cup");
$crab_cakes->addIngredient("Salt and Pepper to taste");
$crab_cakes->addIngredient("Crab meat", 2.5, "lb");

$crab_cakes->addInstructions("Heat large saute pan, add the vegetable oil.");
$crab_cakes->addInstructions("Add vegetables and cook over medium heat until soft.");
$crab_cakes->addInstructions("Add flour and stir until smooth.");
$crab_cakes->addInstructions("Add milk, stir to make a very smooth mixture without lumps.");
$crab_cakes->addInstructions("Remove from heat and transfer to a large bowl.");
$crab_cakes->addInstructions("Add mustard and mix well.");
$crab_cakes->addInstructions("Add eggs and mix well.");
$crab_cakes->addInstructions("Add minced garlic, herbs, season to taste and let cool.");
$crab_cakes->addInstructions("Drain crab meat until dry.");
$crab_cakes->addInstructions("Add to mixture and form 1 1/2 ounce portions.");
$crab_cakes->addInstructions("Shape into rounds and place in refrigerator until time to prepare.");
$crab_cakes->addInstructions("To prepare for service, saute rounds until GBD (Golden Brown & Delicious).");
$crab_cakes->addInstructions("Serve with a fresh fruit salsa and creme fraiche.");

$crab_cakes->setYield("30 cakes");

$crab_cakes->setSource("S. Bob");

$crab_cakes->addTags("dinner");



$beef_medallions = new Recipe("Beef Medallions with Ruby Port Sauce");

$beef_medallions->addIngredient("Beef medallions, 2 ounces", 8);
$beef_medallions->addIngredient("Shallots", 1, "tbsp");
$beef_medallions->addIngredient("Ruby Port", 3, "oz");
$beef_medallions->addIngredient("Red wine", 2, "oz");
$beef_medallions->addIngredient("Thyme sprig", 1);
$beef_medallions->addIngredient("Black peppercorns", 1, "tsp");
$beef_medallions->addIngredient("Bay leaf", 1);
$beef_medallions->addIngredient("Demi-glace or meat glaze", 5, "oz");
$beef_medallions->addIngredient("Garlic, chopped", 1, "tsp");
$beef_medallions->addIngredient("Butter", 1, "tsp");

$beef_medallions->addInstructions("Pan sear the medallions to carmelize the exterior, finish in oven at 350 F to an internal temperature of 145 F.");
$beef_medallions->addInstructions("Reduce the shallots, port, red wine, thyme, peppercorns, and bay leaf by half.");
$beef_medallions->addInstructions("Add demi-glace and reduce.");
$beef_medallions->addInstructions("Strain sauce, add roasted garlic and finish with butter.");
$beef_medallions->addInstructions("Serve two ounces of sauce with each serving of two medallions.");

$beef_medallions->setYield("4 servings");

$beef_medallions->setSource("P. Buffay");

$beef_medallions->addTags("dinner");

$silver_dollar_cakes = new Recipe("Silver Dollar Pancakes");

$silver_dollar_cakes->addIngredient("Eggs", 4);
$silver_dollar_cakes->addIngredient("Salt", .5, "tsp");
$silver_dollar_cakes->addIngredient("Baking soda", .5, "tsp");
$silver_dollar_cakes->addIngredient("Cake flour", .25, "cup");
$silver_dollar_cakes->addIngredient("Sour cream", 2, "cup");
$silver_dollar_cakes->addIngredient("Sugar", 3, "tbsp");

$silver_dollar_cakes->addInstructions("Put eggs in bowl and blend thouroughly.");
$silver_dollar_cakes->addInstructions("Add the salt, baking soda, flour, sour cream, and sugar. Mix well.");
$silver_dollar_cakes->addInstructions("These cakes are very delicate and require a soft touch when turning.");
$silver_dollar_cakes->addInstructions("It is recommended to use only the tip of the spatula and do not attempt to 'flip' the entire cake.");
$silver_dollar_cakes->addInstructions("Instead, use a very gentle lift, raise the cake by 1/3 the surface area and fold them over to finish cooking.");
$silver_dollar_cakes->addInstructions("Serve warm.");

$silver_dollar_cakes->setYield("55 dollar size cakes");

$silver_dollar_cakes->setSource("General Bidwell");

$silver_dollar_cakes->addTags("breakfast");



$french_toast = new Recipe("French Toast");

$french_toast->addIngredient("Whole eggs", 1, "quart");
$french_toast->addIngredient("Milk", 1, "cup");
$french_toast->addIngredient("Cinnamon", .5, "tsp");
$french_toast->addIngredient("Nutmeg", .25, "tsp");
$french_toast->addIngredient("Zest of 1 lemon (blanched)", 1);
$french_toast->addIngredient("Cornflakes, coarsely crushed", 6, "cup");
$french_toast->addIngredient("Bread, sliced 1 inch thick", 24);
$french_toast->addIngredient("Butter", .25, "cup");

$french_toast->addInstructions("Whisk together eggs, milk, cinnamon, nutmeg and lemon zest.");
$french_toast->addInstructions("Put cornflakes into a separate shallow dish.");
$french_toast->addInstructions("Dip bread in egg mixture, soak on each side for ten seconds and then coat with cornflakes.");
$french_toast->addInstructions("Heat butter in a non-stick skillet over medium heat.");
$french_toast->addInstructions("Cook the bread in the pan, turning once, until both sides are GBD (Golden brown & delicious)");
$french_toast->addInstructions("Serve warm with choice of toppings.");

$french_toast->setYield("12 servings");

$french_toast->setSource("Rene Francois Artois");

$french_toast->addTags("breakfast");



$corn_beef_hash = new Recipe("Corn Beef Hash");

$corn_beef_hash->addIngredient("Cornbeef, small diced", 2, "lb");
$corn_beef_hash->addIngredient("Onion, small diced", 1);
$corn_beef_hash->addIngredient("Bell peppers, small diced", 4);
$corn_beef_hash->addIngredient("Potatoes, cooked, small diced", 6);

$corn_beef_hash->addInstructions("Saute the onion and bell pepper.");
$corn_beef_hash->addInstructions("Add corn beef, mix and saute for 2 minutes.");
$corn_beef_hash->addInstructions("Add potatoes, mix and saute for 2 minutes.");
$corn_beef_hash->addInstructions("Salt and pepper to taste.");
$corn_beef_hash->addInstructions("Serve warm.");

$corn_beef_hash->setYield("16, 4 ounce servings.");

$corn_beef_hash->setSource("Zygmund Zyzzyx");

$corn_beef_hash->addTags("breakfast");



$granola = new Recipe("Granola");

$granola->addIngredient("Rolled oats", 1, "quart");
$granola->addIngredient("Rolled wheat", 1, "cup");
$granola->addIngredient("Rolled rye", 1, "cup");
$granola->addIngredient("Rolled barley", 1, "cup");
$granola->addIngredient("Nutmeg", 1, "tsp");
$granola->addIngredient("Cinnamon", .5, "tsp");
$granola->addIngredient("Salt", .125, "tsp");
$granola->addIngredient("Honey", 1.25, "cup");
$granola->addIngredient("Vegetable oil", .75, "cup");
$granola->addIngredient("Almonds", 1.5, "cup");
$granola->addIngredient("Golden raisins", 1, "cup");

$granola->addInstructions("Mix grains and spices together.");
$granola->addInstructions("Combine honey and oil together until completely combined.");
$granola->addInstructions("Blend the grain mixture in with the honey mixture.");
$granola->addInstructions("Spread on a sheet pan and toast in oven at 300 F for approxmiately 7 minutes.");
$granola->addInstructions("Remove from oven and while cooling add in rasisns.");
$granola->addInstructions("Store in an air tight container.");

$granola->setYield("1 sheet pan");

$granola->setSource("H. Crowell");

$granola->addTags("breakfast");



$spicy_omelette = new Recipe("Spicy Omelette");

$spicy_omelette->addIngredient("Butter", 2, "tbsp");
$spicy_omelette->addIngredient("Green chili pepper, seeded & diced", 2);
$spicy_omelette->addIngredient("Kielbasa sausage", 4, "oz");
$spicy_omelette->addIngredient("Onion, diced", 3, "tbsp");
$spicy_omelette->addIngredient("Tomato concasse", 2, "tbsp");
$spicy_omelette->addIngredient("Eggs, beaten", 3);
$spicy_omelette->addIngredient("Pepper-Jack cheese, shredded", 3, "tbsp");

$spicy_omelette->addInstructions("Preheat a nonstick omelette pan and melt 1 Tbsp. butter in the pan.");
$spicy_omelette->addInstructions("Add the chili pepper, sausage, and onion.");
$spicy_omelette->addInstructions("Saute until the vegetables start to soften and the sausage is lightly browned.");
$spicy_omelette->addInstructions("Add the tomato and cook to heat through (about 20 seconds)");
$spicy_omelette->addInstructions("Transfer mixture to a bowl and cover to keep warm.");
$spicy_omelette->addInstructions("Melt the additional 1 Tbsp. butter. ");
$spicy_omelette->addInstructions("Add the eggs and cook, without stirring, for about two minutes.");
$spicy_omelette->addInstructions("Use a high temperature spatula to lift the edges allowing the uncooked egg to flow beneath the cooked portion.");
$spicy_omelette->addInstructions("Cook until the eggs are almost set and then flip the omelette in the pan.");
$spicy_omelette->addInstructions("Cook for 45 seconds to set eggs and then flip the omelette again.");
$spicy_omelette->addInstructions("Arrange the sausage mixture and then the cheese in the center of the omelette.");
$spicy_omelette->addInstructions("Tri-fold the eggs over the mixture and 'roll' the omlette seam side down");
$spicy_omelette->addInstructions("Cook an additional 30 seconds to finish cooking the eggs and to melt the cheese");
$spicy_omelette->addInstructions("Slide the omelette onto a plate, top with extra cheese. Serve hot");

$spicy_omelette->setYield("1 serving");

$spicy_omelette->setSource("S. Gonzales");

$spicy_omelette->addTags("breakfast");



$scones = new Recipe("Orange Cranberry Scones");

$scones->addIngredient("All purpose flour", 3, "cup");
$scones->addIngredient("Sugar", .333, "cup");
$scones->addIngredient("Baking powder", 2.5, "tsp");
$scones->addIngredient("Salt", 1, "tsp");
$scones->addIngredient("Baking soda", .5, "tsp");
$scones->addIngredient("Orange zest", 1, "tbsp");
$scones->addIngredient("Butter, unsalted & chilled, 1/2 pieces", .75, "cup");
$scones->addIngredient("Cranberries, dried", .75, "cup");
$scones->addIngredient("Heavy cream, cold", 1, "cup");
$scones->addIngredient("Confectioner's sugar", .5, "cup");
$scones->addIngredient("Orange juice, freshly squeezed", 4, "tsp");

$scones->addInstructions("Preheat oven to 400 F.");
$scones->addInstructions("Line a baking sheet with parchment paper.");
$scones->addInstructions("Sift together dry ingredients into a large bowl.");
$scones->addInstructions("Mix in orange zest.");
$scones->addInstructions("Add butter and cut into dry ingredients until the mixture resembles coarse meal.");
$scones->addInstructions("Mix in dried cranberries.");
$scones->addInstructions("Gradually add cream until moist clumbs form.");
$scones->addInstructions("Move dough to a lightly floured work surface and knead about four turns to bind the dough.");
$scones->addInstructions("Form dough into a round 1 inch thick.");
$scones->addInstructions("Cut into 10 pieces and transfer to baking sheet.");
$scones->addInstructions("Bake in oven until the tops are golden brown, approximately 25 minutes.");
$scones->addInstructions("Remove from oven and let cool on the baking sheet for 10 minutes.");
$scones->addInstructions("Whisk together the confectioner's sugar and orange juice.");
$scones->addInstructions("Lightly drizzle over the scones while still warm.");

$scones->setYield("10 scones");

$scones->setSource("Beryl Patmore");

$scones->addTags("breakfast");

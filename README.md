# yt_inventory

This web inventory location app was built using javascript as well as php for the SQL database connections. It was designed to assist with a friend's inventory management for their online web store. They did not want quantity tracking as their web storefront handles item quantity in stock. This app instead aims to provide a reliable way to find items stored in their warehouse. Warehouse locations and bins are labeled which allows this app to pair entered sku numbers with locations.

Add Item
This page allows the user to enter a sku number and location which will be sent to the database for storage.

Find Item
This page allows the user to enter a sku number and returns a list of all locations with that item. Once the user has retrieved the item they can use the delete button to remove the item if there are no duplicates remaining in that location.

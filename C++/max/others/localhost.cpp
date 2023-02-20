#include <iostream>
#include <curl>

using namespace std;

int main() {
	CURL *curl;
	CURLcode res;
	
	curl = curl_easy_init();
	if(curl) {
		curl_easy_setopt(curl, CURLOPT_URL, "http://localhost:7777");
		res = curl_easy_perform(curl);
		if(res != CURLE_OK) {
			cout << "Error: " << curl_easy_strerror(res) << endl;
		}
		curl_easy_cleanup(curl);
	}
	else {
		cout << "Error: failed to initialize curl" << endl;
	}
	
	return 0;
}


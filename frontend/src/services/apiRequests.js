import axios from "axios";

const baseUrl = "http://localhost:3000/"; 

async function doGetRequest(entity) {
  const options = {
    method: "GET",
    url: baseUrl + entity.toLowerCase(),
  };
  const data = await sendRequest(options);

  return data;
}


async function sendRequest(options) {
  try {
    const response = await axios.request(options);

    return response.data;
  } catch (error) {
    console.error(error);
  }
}

export { doGetRequest };
